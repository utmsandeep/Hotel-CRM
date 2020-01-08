<?php

namespace App\Rules;

use App\Models\Genre;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Database\Eloquent\Model;

class UniqueExceptSelf implements Rule {
	/**
	 * @var string
	 */
	private $table;

	/**
	 * @var string
	 */
	private $key;

	/**
	 * @var string
	 */
	private $value;

	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $attributeName;

	/**
	 * Create a new rule instance.
	 *
	 * @param string $table
	 * @param string $key
	 * @param $value
	 * @param $id
	 * @param $attributeName
	 */
	public function __construct($table, $key, $value, $id, $attributeName = null) {
		$this->table = $table;
		$this->key = $key;
		$this->value = $value;
		$this->id = $id;
		$this->attributeName = $attributeName ?? $this->makeAttributeName();
	}

	/**
	 * Determine if the validation rule passes.
	 *
	 * @param string $attribute
	 * @param mixed $value
	 * @return bool
	 */
	public function passes($attribute, $value) {
		$entry = $this->table::where($this->key, $this->value)->where('id', '!=', $this->id)->first();
		return $entry == null;
	}

	/**
	 * Get the validation error message.
	 *
	 * @return string
	 */
	public function message() {
		return sprintf('%s is already taken. Please choose a different one.', $this->attributeName);
	}

	public function makeAttributeName() {
		$name = $this->table;
		$lastIndex = strrpos($name, "\\") + 1;
		return sprintf("%s %s", substr($name, $lastIndex), $this->key);
	}
}