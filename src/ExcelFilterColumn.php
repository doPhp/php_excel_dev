<?php

declare(strict_types=1);
/*
  +---------------------------------------------------------------------------+
  | ExcelFilterColumn                                                         |
  |                                                                           |
  | Reference file for NuSphere PHPEd (and possibly other IDE's) for use with |
  | php_excel interface to libxl by Ilia Alshanetsky <ilia@ilia.ws>           |
  |                                                                           |
  | php_excel "PECL" style module (http://github.com/iliaal/php_excel)        |
  | libxl library (http://www.libxl.com)                                      |
  |                                                                           |
  +---------------------------------------------------------------------------+
*/
class ExcelFilterColumn
{
    public const FILTER_VALUE   = 0;
    public const FILTER_TOP10   = 1;
    public const FILTER_CUSTOM  = 2;
    public const FILTER_DYNAMIC = 3;
    public const FILTER_COLOR   = 4;
    public const FILTER_ICON    = 5;
    public const FILTER_EXT     = 6;
    public const FILTER_NOT_SET = 7;

    public const OPERATOR_EQUAL                 = 0;
    public const OPERATOR_GREATER_THAN          = 1;
    public const OPERATOR_GREATER_THAN_OR_EQUAL = 2;
    public const OPERATOR_LESS_THAN             = 3;
    public const OPERATOR_LESS_THAN_OR_EQUAL    = 4;
    public const OPERATOR_NOT_EQUAL             = 5;

    /**
     * Create a filter column within an Excel auto filter.
     *
     * @see ExcelAutoFilter::column()
     *
     * @param ExcelAutoFilter $autoFilter
     *
     * @return ExcelFilterColumn
     */
    public function __construct(ExcelAutoFilter $autoFilter)
    {
    }

    // __construct

    /**
     * Returns the zero-based index of this AutoFilter column.
     *
     * @return int
     */
    public function index(): int
    {
    }

    // index

    /**
     * Returns the filter type of this AutoFilter column.
     *
     * @return int One of ExcelFilterColumn::FILTER_* constants
     */
    public function filterType(): int
    {
    }

    // filterType

    /**
     * Returns the number of filter values.
     *
     * @return int
     */
    public function filterSize(): int
    {
    }

    // filterSize

    /**
     * Returns the filter value by index.
     *
     * @param int $index
     *
     * @return string filter value
     */
    public function filter(int $index): string
    {
    }

    // filter

    /**
     * Adds the filter value.
     *
     * @param string $filterValue
     */
    public function addFilter(string $filterValue)
    {
    }

    // addFilter

    /**
     * Gets the number of top or bottom items:.
     *
     * @return array with keys "value"(float), "top"(bool) and "percent"(bool)
     */
    public function getTop10(): array
    {
    }

    // getTop10

    /**
     * Sets the number of top or bottom items:.
     *
     * @param float $value   - number of items;
     * @param bool  $top     - top items if true otherwise bottom items; (optional, default = true)
     * @param bool  $percent - using percent instead of number items. (optional, default = false)
     *
     * @return bool
     */
    public function setTop10(float $value, bool $top = true, bool $percent = false): bool
    {
    }

    // setTop10

    /**
     * Gets the custom filter criteria:.
     *
     * @return array with keys "operator_1"(int), "value_1"(string), "operator_2"(int), "value_2"(string) and "andOp"(bool)
     */
    public function getCustomFilter(): array
    {
    }

    // getCustomFilter

    /**
     * Sets the custom filter criteria.
     *
     * @param int    $op1   - one of ExcelFilterColumn::OPERATOR_* constants - operator used by the filter comparison in the first filter criteria;
     * @param string $v1    - value used in the first filter criteria;
     * @param int    $op2   - one of ExcelFilterColumn::OPERATOR_* constants - operator used by the filter comparison in the second filter criteria; (optional, default = -1)
     * @param null|string $v2    - value used in the second filter criteria; (optional, default = null)
     * @param bool   $andOp - flag indicating whether the two criterias have an "and" relationship. True indicates "and", false indicates "or". (optional, default = false)
     */
    public function setCustomFilter(int $op1, string $v1, int $op2 = -1, null|string $v2 = null, bool $andOp = false)
    {
    }

    // setCustomFilter

    /**
     * Clear the filter criteria.
     *
     * @return bool
     */
    public function clear(): bool
    {
    }

    // clear
} // end ExcelFilterColumn
