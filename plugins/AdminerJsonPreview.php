<?php

namespace Adminer;

/**
 * Displays JSON preview as a table.
 *
 * @author Peter Knut
 *
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerJsonPreview
{
	/** @var bool */
	private $inTable;

	/** @var bool */
	private $inEdit;

	/** @var int */
	private $maxLevel;

	/** @var int */
	private $maxTextLength;

	/** @var int */
	private $counter = 1;

	/**
	 * @param bool $inTable Whether apply JSON preview in selection table.
	 * @param bool $inEdit Whether apply JSON preview in edit form.
	 * @param int $maxLevel Max. level in recursion.
	 * @param int $maxTextLength Maximal length of string values. Longer texts will be truncated with ellipsis sign '…'.
	 */
	public function __construct(bool $inTable = true, bool $inEdit = true, int $maxLevel = 5, int $maxTextLength = 100)
	{
		$this->inTable = $inTable;
		$this->inEdit = $inEdit;
		$this->maxLevel = $maxLevel;
		$this->maxTextLength = $maxTextLength;
	}

	/**
	 * Prints HTML code inside <head>.
	 */
	public function head()
	{
		?>

		<style>
			/* Table */
			.json {
				/*display: none;*/
				width: auto;
				margin: 4px 0;
				border-color: var(--code-border);
				border-left: 7px solid var(--code-border);
				background-color: var(--code-bg);
			}

			.json th {
				padding: 0;
				width: 1px;
				background-color: transparent;
				border-color: var(--code-border);
			}

			.json td {
				padding: 0;
				border-color: var(--code-border);
			}

			.json code {
				display: block;
				background: transparent;
				padding: 3px 7px;
				white-space: normal;
			}

			.json .json {
				display: table;
				width: 100%;
				border: none;
				margin: 0;
			}

			.json:not(.hidden) + textarea {
				margin-top: 3px;
			}
		</style>

		<?php
	}

	public function selectVal(&$val, $link, array $field, $original)
	{
		if (!$this->inTable) {
			return null;
		}

		if ($this->isJson($field, $original) && ($json = json_decode($original, true)) !== null && is_array($json)) {
			$val = "<a class='toggle jsonly' href='#json-code-$this->counter' title='JSON'>" . icon_chevron_right() . "</a> " . $val;
			$val .= $this->buildTable($json, 1, $this->counter++);
		}

		return null;
	}

	public function editInput($table, array $field, $attrs, $value)
	{
		if (!$this->inEdit) {
			return null;
		}

		if ($this->isJson($field, $value) && ($json = json_decode($value, true)) !== null && is_array($json)) {
			echo "<div class='jsonly'><a class='toggle' href='#json-code-$this->counter'>JSON" . icon_chevron_down() . "</a></div>";
			echo $this->buildTable($json, 1, $this->counter++);
		}

		return null;
	}

	private function isJson(array $field, $value): bool
	{
		return $field["type"] == "json" || (is_string($value) && in_array(substr($value, 0, 1), ['{', '[']));
	}

	private function buildTable(array $json, int $level = 1, int $id = 0): string
	{
		$value = "<table class='json hidden'" . ($id && $level == 1 ? " id='json-code-$id'" : "") . ">";

		foreach ($json as $key => $val) {
			$value .= "<tr><th><code>" . h($key) . "</code>";
			$value .= "<td>";

			if (is_array($val) && $level < $this->maxLevel) {
				$value .= $this->buildTable($val, $level + 1);
			} else {
				if (is_array($val)) {
					$val = preg_replace('~([,:])(\S)~', '$1 $2', json_encode($val));
					$val = truncate_utf8($val, $this->maxTextLength);
				} elseif (is_string($val)) {
					$val = truncate_utf8($val, $this->maxTextLength);
					$val = '"' . $val . '"';
				} elseif (is_bool($val)) {
					$val = h($val ? "true" : "false");
				} elseif (is_null($val)) {
					$val = "null";
				}

				$value .= "<code class='jush-js'>$val</code>";
			}
		}

		if (!$json) {
			$value .= "<tr><td>   </td></tr>";
		}

		$value .= "</table>";

		return $value;
	}
}
