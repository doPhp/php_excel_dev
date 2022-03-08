<?php

declare(strict_types=1);
/*
  +---------------------------------------------------------------------------+
  | ExcelSheet                                                                |
  |                                                                           |
  | Reference file for NuSphere PHPEd (and possibly other IDE's) for use with |
  | php_excel interface to libxl by Ilia Alshanetsky <ilia@ilia.ws>           |
  |                                                                           |
  | php_excel "PECL" style module (http://github.com/iliaal/php_excel)        |
  | libxl library (http://www.libxl.com)                                      |
  |                                                                           |
  | Rob Gagnon <rgagnon24@gmail.com>                                          |
  +---------------------------------------------------------------------------+
*/
class ExcelSheet
{
    public const PAPER_DEFAULT              = 0;
    public const PAPER_LETTER               = 1;
    public const PAPER_LETTERSMALL          = 2;
    public const PAPER_TABLOID              = 3;
    public const PAPER_LEDGER               = 4;
    public const PAPER_LEGAL                = 5;
    public const PAPER_STATEMENT            = 6;
    public const PAPER_EXECUTIVE            = 7;
    public const PAPER_A3                   = 8;
    public const PAPER_A4                   = 9;
    public const PAPER_A4SMALL              = 10;
    public const PAPER_A5                   = 11;
    public const PAPER_B4                   = 12;
    public const PAPER_B5                   = 13;
    public const PAPER_FOLIO                = 14;
    public const PAPER_QUATRO               = 15;
    public const PAPER_10x14                = 16;
    public const PAPER_10x17                = 17;
    public const PAPER_NOTE                 = 18;
    public const PAPER_ENVELOPE_9           = 19;
    public const PAPER_ENVELOPE_10          = 20;
    public const PAPER_ENVELOPE_11          = 21;
    public const PAPER_ENVELOPE_12          = 22;
    public const PAPER_ENVELOPE_14          = 23;
    public const PAPER_C_SIZE               = 24;
    public const PAPER_D_SIZE               = 25;
    public const PAPER_E_SIZE               = 26;
    public const PAPER_ENVELOPE_DL          = 27;
    public const PAPER_ENVELOPE_C5          = 28;
    public const PAPER_ENVELOPE_C3          = 29;
    public const PAPER_ENVELOPE_C4          = 30;
    public const PAPER_ENVELOPE_C6          = 31;
    public const PAPER_ENVELOPE_C65         = 32;
    public const PAPER_ENVELOPE_B4          = 33;
    public const PAPER_ENVELOPE_B5          = 34;
    public const PAPER_ENVELOPE_B6          = 35;
    public const PAPER_ENVELOPE             = 36;
    public const PAPER_ENVELOPE_MONARCH     = 37;
    public const PAPER_US_ENVELOPE          = 38;
    public const PAPER_FANFOLD              = 39;
    public const PAPER_GERMAN_STD_FANFOLD   = 40;
    public const PAPER_GERMAN_LEGAL_FANFOLD = 41;

    public const CELLTYPE_EMPTY   = 0;
    public const CELLTYPE_NUMBER  = 1;
    public const CELLTYPE_STRING  = 2;
    public const CELLTYPE_BOOLEAN = 3;
    public const CELLTYPE_BLANK   = 4;
    public const CELLTYPE_ERROR   = 5;

    public const ERRORTYPE_NULL    = 0;
    public const ERRORTYPE_DIV_0   = 7;
    public const ERRORTYPE_VALUE   = 15;
    public const ERRORTYPE_REF     = 23;
    public const ERRORTYPE_NAME    = 29;
    public const ERRORTYPE_NUM     = 36;
    public const ERRORTYPE_NA      = 42;
    public const ERRORTYPE_NOERROR = 255;

    public const LEFT_TO_RIGHT = 0;
    public const RIGHT_TO_LEFT = 1;

    public const IERR_EVAL_ERROR            = 1;
    public const IERR_EMPTY_CELLREF         = 2;
    public const IERR_NUMBER_STORED_AS_TEXT = 4;
    public const IERR_INCONSIST_RANGE       = 8;
    public const IERR_INCONSIST_FMLA        = 16;
    public const IERR_TWODIG_TEXTYEAR       = 32;
    public const IERR_UNLOCK_FMLA           = 64;
    public const IERR_DATA_VALIDATION       = 128;

    public const PROT_DEFAULT            = -1;
    public const PROT_ALL                = 0;
    public const PROT_OBJECTS            = 1;
    public const PROT_SCENARIOS          = 2;
    public const PROT_FORMAT_CELLS       = 4;
    public const PROT_FORMAT_COLUMNS     = 8;
    public const PROT_FORMAT_ROWS        = 16;
    public const PROT_INSERT_COLUMNS     = 32;
    public const PROT_INSERT_ROWS        = 64;
    public const PROT_INSERT_HYPERLINKS  = 128;
    public const PROT_DELETE_COLUMNS     = 256;
    public const PROT_DELETE_ROWS        = 512;
    public const PROT_SEL_LOCKED_CELLS   = 1024;
    public const PROT_SORT               = 2048;
    public const PROT_AUTOFILTER         = 4096;
    public const PROT_PIVOTTABLES        = 8192;
    public const PROT_SEL_UNLOCKED_CELLS = 16384;

    public const SHEETSTATE_VISIBLE    = 0;
    public const SHEETSTATE_HIDDEN     = 1;
    public const SHEETSTATE_VERYHIDDEN = 2;

    public const VALIDATION_TYPE_NONE       = 0;
    public const VALIDATION_TYPE_WHOLE      = 1;
    public const VALIDATION_TYPE_DECIMAL    = 2;
    public const VALIDATION_TYPE_LIST       = 3;
    public const VALIDATION_TYPE_DATE       = 4;
    public const VALIDATION_TYPE_TIME       = 5;
    public const VALIDATION_TYPE_TEXTLENGTH = 6;
    public const VALIDATION_TYPE_CUSTOM     = 7;

    public const VALIDATION_OP_BETWEEN            = 0;
    public const VALIDATION_OP_NOTBETWEEN         = 1;
    public const VALIDATION_OP_EQUAL              = 2;
    public const VALIDATION_OP_NOTEQUAL           = 3;
    public const VALIDATION_OP_LESSTHAN           = 4;
    public const VALIDATION_OP_LESSTHANOREQUAL    = 5;
    public const VALIDATION_OP_GREATERTHAN        = 6;
    public const VALIDATION_OP_GREATERTHANOREQUAL = 7;

    public const VALIDATION_ERRSTYLE_STOP        = 0; // stop icon in the error alert
    public const VALIDATION_ERRSTYLE_WARNING     = 1; // warning icon in the error alert
    public const VALIDATION_ERRSTYLE_INFORMATION = 2; // information icon in the error alert

    /**
     * Create an ExcelSheet in given Workbook.
     *
     * @param ExcelBook $book
     * @param string    $name The name for the new worksheet
     *
     * @return ExcelSheet The worksheet created
     */
    public function __construct(ExcelBook $book, string $name)
    {
    }

    // __construct

    /**
     * Adds a data validation for the specified range (only for xlsx files).
     *
     * @since libXL 3.8.0.0
     *
     * @param int    $type              - one of the ExcelSheet::VALIDATION_TYPE_* constants
     * @param int    $op                - one of the ExcelSheet::VALIDATION_OP_* constants
     * @param int    $row_first         0-based
     * @param int    $row_last          0-based
     * @param int    $col_first         0-based
     * @param int    $col_last          0-based
     * @param string $val_1             the first value for relational operator
     * @param null|string $val_2             the second value for VALIDATION_OP_BETWEEN or VALIDATION_OP_NOTBETWEEN operator
     * @param bool   $allow_blank       (optional, default = true) a boolean value indicating whether the data validation treats empty or blank entries as valid, 'true' means empty entries are OK and do not violate the validation constraints
     * @param bool   $hide_dropdown     (optional, default = false) a boolean value indicating whether to display the dropdown combo box for a list type data validation (ExcelSheet::VALIDATION_TYPE_LIST)
     * @param bool   $show_inputmessage (optional, default = true) a boolean value indicating whether to display the input prompt message
     * @param bool   $show_errormessage (optional, default = true) a boolean value indicating whether to display the error alert message when an invalid value has been entered, according to the criteria specified
     * @param string $prompt_title      (optional, default = '') title bar text of input prompt
     * @param string $prompt            (optional, default = '') message text of input prompt
     * @param string $error_title       (optional, default = '') title bar text of error alert
     * @param string $error             (optional, default = '') message text of error alert
     * @param int    $error_style       - (optional, default = \ExcelSheet::VALIDATION_ERRSTYLE_WARNING) one of the ExcelSheet::VALIDATION_ERRSTYLE_* constants
     */
    public function addDataValidation(int $type, int $op, int $row_first, int $row_last,
                                      int $col_first, int $col_last, string $val_1,
                                      null|string $val_2 = null, bool $allow_blank = true,
                                      bool $hide_dropdown = false, bool $show_inputmessage = true,
                                      bool $show_errormessage = true, string $prompt_title = '',
                                      string $prompt = '', string $error_title = '',
                                      string $error = '', int $error_style = self::VALIDATION_ERRSTYLE_WARNING)
    {
    }

    // addDataValidation

    /**
     * Adds a data validation for the specified range with double or date values for the relational
     * operator (only for xlsx files).
     *
     * @since libXL 3.8.0.0
     *
     * @param int    $type              - one of the ExcelSheet::VALIDATION_TYPE_* constants
     * @param int    $op                - one of the ExcelSheet::VALIDATION_OP_* constants
     * @param int    $row_first         0-based
     * @param int    $row_last          0-based
     * @param int    $col_first         0-based
     * @param int    $col_last          0-based
     * @param float  $val_1             the first value for relational operator
     * @param null|float  $val_2             the second value for VALIDATION_OP_BETWEEN or VALIDATION_OP_NOTBETWEEN operator
     * @param bool   $allow_blank       (optional, default = true) a boolean value indicating whether the data validation treats empty or blank entries as valid, 'true' means empty entries are OK and do not violate the validation constraints
     * @param bool   $hide_dropdown     (optional, default = false) a boolean value indicating whether to display the dropdown combo box for a list type data validation (ExcelSheet::VALIDATION_TYPE_LIST)
     * @param bool   $show_inputmessage (optional, default = true) a boolean value indicating whether to display the input prompt message
     * @param bool   $show_errormessage (optional, default = true) a boolean value indicating whether to display the error alert message when an invalid value has been entered, according to the criteria specified
     * @param string $prompt_title      (optional, default = '') title bar text of input prompt
     * @param string $prompt            (optional, default = '') message text of input prompt
     * @param string $error_title       (optional, default = '') title bar text of error alert
     * @param string $error             (optional, default = '') message text of error alert
     * @param int    $error_style       - (optional, default = \ExcelSheet::VALIDATION_ERRSTYLE_WARNING) one of the ExcelSheet::VALIDATION_ERRSTYLE_* constants
     */
    public function addDataValidationDouble(int $type, int $op, int $row_first, int $row_last,
                                            int $col_first, int $col_last, float $val_1,
                                            null|float $val_2 = null, bool $allow_blank = true,
                                            bool $hide_dropdown = false, bool $show_inputmessage = true,
                                            bool $show_errormessage = true, string $prompt_title = '',
                                            string $prompt = '', string $error_title = '', string $error = '',
                                            int $error_style = self::VALIDATION_ERRSTYLE_WARNING)
    {
    }

    // addDataValidationDouble

    /**
     * Adds the new hyperlink.
     *
     * @param string $hyperlink
     * @param int    $row_first 0-based
     * @param int    $row_last  0-based
     * @param int    $col_first 0-based
     * @param int    $col_last  0-based
     */
    public function addHyperlink(string $hyperlink, int $row_first, int $row_last, int $col_first, int $col_last)
    {
    }

    // addHyperlink

    /**
     * Adds the ignored error for specified range. It allows to hide green triangles on left sides of cells.
     *
     * @param int $error     - one of the ExcelSheet::IERR_* constants
     * @param int $row_first 0-based (optional, default = 0)
     * @param int $col_first 0-based (optional, default = 0)
     * @param int $row_last  0-based (optional, default = 0)
     * @param int $col_last  0-based (optional, default = 0)
     *
     * @return bool
     */
    public function addIgnoredError(int $error, int $row_first = 0, int $col_first = 0, int $row_last = 0, int $col_last = 0): bool
    {
    }

    // addIgnoredError

    /**
     * Insert a picture into a cell with given dimensions.
     *
     * @see ExcelBook::addPictureFromString()
     * @see ExcelBook::addPictureFromFile()
     * @see ExcelSheet::addPictureScaled()
     *
     * @param int $row        0-based row number
     * @param int $column     0-based column number
     * @param int $picture_id Value returned by ExcelBook::addPictureFrom*() methods
     * @param int $width
     * @param int $height
     * @param int $x_offset   (optional, default=0)
     * @param int $y_offset   (optional, default=0)
     */
    public function addPictureDim(int $row, int $column, int $picture_id, int $width, int $height,
                                  int $x_offset = 0, int $y_offset = 0)
    {
    }

    // addPictureDim

    /**
     * Insert a picture into a cell with a set scale.
     *
     * @see ExcelBook::addPictureFromString()
     * @see ExcelBook::addPictureFromFile()
     * @see ExcelSheet::addPictureDim()
     *
     * @param int   $row        0-based row number
     * @param int   $column     0-based column number
     * @param int   $picture_id Value returned by ExcelBook::addPictureFrom*() methods
     * @param float $scale
     * @param int   $x_offset   (optional, default = 0)
     * @param int   $y_offset   (optional, default = 0)
     */
    public function addPictureScaled(int $row, int $column, int $picture_id, float $scale, int $x_offset = 0, int $y_offset = 0)
    {
    }

    // addPictureScaled

    /**
     * Converts a cell reference to row and column.
     *
     * @param string $cell_reference
     *
     * @return array with keys "row"(int), "column"(int), "col_relative"(bool), "row_relative"(bool)
     */
    public function addrToRowCol(string $cell_reference): array
    {
    }

    // addrToRowCol

    /**
     * Returns the AutoFilter. Creates it if it doesn't exist.
     *
     * @return ExcelAutoFilter
     */
    public function autoFilter(): ExcelAutoFilter
    {
    }

    // autoFilter

    /**
     * Applies the AutoFilter to the sheet.
     *
     * @return bool
     */
    public function applyFilter(): bool
    {
    }

    // applyFilter

    /**
     * Removes the AutoFilter from the sheet.
     *
     * @return bool
     */
    public function removeFilter(): bool
    {
    }

    // removeFilter

    /**
     * Get the cell format.
     *
     * @param int $row    0-based row number
     * @param int $column 0-based column number
     *
     * @return ExcelFormat
     */
    public function cellFormat(int $row, int $column): ExcelFormat
    {
    }

    // cellFormat

    /**
     * Get the cell type.
     *
     * @param int $row    0-based row number
     * @param int $column 0-based column number
     *
     * @return int One of ExcelSheet::CELLTYPE_* constants
     */
    public function cellType(int $row, int $column): int
    {
    }

    // cellType

    /**
     * Clear cells in the specified area.
     *
     * @param int $row_start    0-based row number
     * @param int $row_end      0-based row number
     * @param int $column_start 0-based column number
     * @param int $column_end   0-based column number
     */
    public function clear(int $row_start, int $row_end, int $column_start, int $column_end)
    {
    }

    // clear

    /**
     * Sets the print area.
     *
     * @param int $row_start    0-based row number
     * @param int $row_end      0-based row number
     * @param int $column_start 0-based column number
     * @param int $column_end   0-based column number
     *
     * @return bool
     */
    public function setPrintArea(int $row_start, int $row_end, int $column_start, int $column_end): bool
    {
    }

    // setPrintArea

    /**
     * Gets the print area. Returns false if print area isn't found.
     *
     * @return bool|array with keys "row_start"(int), "row_end"(int), "col_start"(int) and "col_end"(int)
     */
    public function printArea(): bool|array
    {
    }

    // printArea

    /**
     * Clears the print area.
     *
     * @return bool
     */
    public function clearPrintArea(): bool
    {
    }

    // clearPrintArea

    /**
     * Clears repeated rows and columns on each page.
     *
     * @see ExcelSheet::setPrintRepeatRows()
     * @see ExcelSheet::setPrintRepeatCols()
     *
     * @return bool
     */
    public function clearPrintRepeats(): bool
    {
    }

    // clearPrintRepeats

    /**
     * Returns whether column is hidden.
     *
     * @param int $column 0-based column number
     *
     * @return bool
     */
    public function colHidden(int $column): bool
    {
    }

    // colHidden

    /**
     * Returns the cell width.
     *
     * @see ExcelSheet::rowHeight()
     * @see ExcelSheet::setColWidth()
     * @see ExcelSheet::setRowHeight()
     *
     * @param int $column 0-based column number
     *
     * @return float
     */
    public function colWidth(int $column): float
    {
    }

    // colWidth

    /**
     * Copy a cell from one location to another.
     *
     * @param int $row_from    0-based row number
     * @param int $column_from 0-based column number
     * @param int $row_to      0-based row number
     * @param int $column_to   0-based column number
     */
    public function copy(int $row_from, int $column_from, int $row_to, int $column_to)
    {
    }

    // copy

    /**
     * Removes hyperlink by index.
     *
     * @param int $index
     *
     * @return bool
     */
    public function delHyperlink(int $index): bool
    {
    }

    // delHyperlink

    /**
     * Delete a named range.
     *
     * @see ExcelSheet::setNamedRange()
     *
     * @param string $name
     * @param null|int    $scope_id
     *
     * @return bool
     */
    public function delNamedRange(string $name, null|int $scope_id = null): bool
    {
    }

    // delNamedRange

    /**
     * Delete cell merge.
     *
     * @param int $row    0-based row number
     * @param int $column 0-based column number
     *
     * @return bool
     */
    public function deleteMerge(int $row, int $column): bool
    {
    }

    // deleteMerge

    /**
     * Removes merged cells by index.
     *
     * @param int $index
     *
     * @return bool
     */
    public function delMergeByIndex(int $index): bool
    {
    }

    // delMergeByIndex

    /**
     * Returns whether the gridlines are displayed.
     *
     * @see ExcelSheet::setDisplayGridlines()
     *
     * @return bool
     */
    public function displayGridlines(): bool
    {
    }

    // displayGridlines

    /**
     * Returns the 0-based first column in a sheet that contains a used cell.
     *
     * @see ExcelSheet::firstRow()
     * @see ExcelSheet::lastRow()
     * @see ExcelSheet::lastCol()
     *
     * @return int
     */
    public function firstCol(): int
    {
    }

    // firstCol

    /**
     * Returns the 0-based first row in a sheet that contains a used cell.
     *
     * @see ExcelSheet::lastRow()
     * @see ExcelSheet::firstCol()
     * @see ExcelSheet::lastCol()
     *
     * @return int
     */
    public function firstRow(): int
    {
    }

    // firstRow

    /**
     * Returns the footer text of the sheet when printed.
     *
     * @see ExcelSheet::header()
     * @see ExcelSheet::setFooter()
     * @see ExcelSheet::setHeader()
     *
     * @return string
     */
    public function footer(): string
    {
    }

    // footer

    /**
     * Returns the footer margin (in inches).
     *
     * @see ExcelSheet::setFooter()
     * @see ExcelSheet::headerMargin()
     *
     * @return float
     */
    public function footerMargin(): float
    {
    }

    // footerMargin

    /**
     * Returns whether grouping rows summary is below, or above.
     *
     * @see ExcelSheet::setGroupSummaryBelow()
     * @see ExcelSheet::getGroupSummaryRight()
     * @see ExcelSheet::setGroupSummaryRight()
     *
     * @return bool true=below, false=above
     */
    public function getGroupSummaryBelow(): bool
    {
    }

    // getGroupSummaryBelow

    /**
     * Returns whether grouping columns summary is right, or left.
     *
     * @see ExcelSheet::getGroupSummaryBelow()
     * @see ExcelSheet::setGroupSummaryBelow()
     * @see ExcelSheet::setGroupSummaryRight()
     *
     * @return bool true=right, false=left
     */
    public function getGroupSummaryRight(): bool
    {
    }

    // getGroupSummaryRight

    /**
     * Returns column with horizontal page break at position index.
     *
     * @param int $index
     *
     * @return int
     */
    public function getHorPageBreak(int $index): int
    {
    }

    // getHorPageBreak

    /**
     * Returns a number of horizontal page breaks in the sheet.
     *
     * @return int
     */
    public function getHorPageBreakSize(): int
    {
    }

    // getHorPageBreakSize

    /**
     * Gets the named range coordinates by index.
     *
     * @param int $index
     * @param null|int $scope_id (optional, default = null) index of sheet or -1 for Workbook
     *
     * @return array with keys "row_first"(int), "row_last"(int), "col_first"(int), "col_last"(int), "hidden"(bool), "scope"(int)
     */
    public function getIndexRange(int $index, null|int $scope_id = null): array
    {
    }

    // getIndexRange

    /**
     * Get cell merge range.
     *
     * @param int $row    0-based row number
     * @param int $column 0-based column number
     *
     * @return array Four integers as keys "row_first", "row_last", "col_first", and "col_last"
     */
    public function getMerge(int $row, int $column): array
    {
    }

    // getMerge

    /**
     * Gets the named range coordinates by name, returns false if range is not found.
     *
     * @param string $name
     * @param null|int    $scope_id (optional, default=null)
     *
     * @return array with keys "row_first"(int), "row_last"(int), "col_first"(int), "col_last"(int), "hidden"(bool)
     */
    public function getNamedRange(string $name, null|int $scope_id = null): array
    {
    }

    // getNamedRange

    /**
     * Returns a number of pictures in this worksheet.
     *
     * @return int
     */
    public function getNumPictures(): int
    {
    }

    // getNumPictures

    /**
     * Returns a information about a workbook picture at position index in worksheet.
     *
     * @param int $index
     *
     * @return array with keys "picture_index"(int), "row_top"(int), "col_left"(int), "row_bottom"(int), "col_right"(int), "width"(int), "height"(int), "offset_x"(int), "offset_y"(int)
     */
    public function getPictureInfo(int $index): array
    {
    }

    // getPictureInfo

    /**
     * Returns whether fit to page option is enabled, and if so to what width & height.
     *
     * @return array with keys "width"(int), "height"(int)
     */
    public function getPrintFit(): array
    {
    }

    // getPrintFit

    /**
     * Returns whether the text is displayed in right-to-left mode: 1 - yes, 0 - no.
     *
     * @return int
     */
    public function getRightToLeft(): int
    {
    }

    // getRightToLeft

    /**
     * Extracts the first visible row and the leftmost visible column of the sheet.
     *
     * @return array with keys "row"(int), "column"(int)
     */
    public function getTopLeftView(): array
    {
    }

    // getTopLeftView

    /**
     * Returns column with vertical page break at position index.
     *
     * @param int $index
     *
     * @return int
     */
    public function getVerPageBreak(int $index): int
    {
    }

    // getVerPageBreak

    /**
     * Returns a number of vertical page breaks in the sheet.
     *
     * @return int
     */
    public function getVerPageBreakSize(): int
    {
    }

    // getVerPageBreakSize

    /**
     * Group columns from $column_start to $column_end.
     *
     * @param int  $column_start 0-based column number
     * @param int  $column_end   0-based column number
     * @param bool $collapse     (optional, default = false)
     *
     * @return bool
     */
    public function groupCols(int $column_start, int $column_end, bool $collapse = false): bool
    {
    }

    // groupCols

    /**
     * Group rows from $row_start to $row_end.
     *
     * @param int  $row_start 0-based row number
     * @param int  $row_end   0-based row number
     * @param bool $collapse  (optional, default = false)
     *
     * @return bool
     */
    public function groupRows(int $row_start, int $row_end, bool $collapse = false): bool
    {
    }

    // groupRows

    /**
     * Returns whether the sheet is centered horizontally when printed.
     *
     * @see ExcelSheet::vcenter()
     * @see ExcelSheet::setHCenter()
     * @see ExcelSheet::setVCenter()
     *
     * @return bool
     */
    public function hcenter(): bool
    {
    }

    // hcenter

    /**
     * Returns the header text of the sheet when printed.
     *
     * @see ExcelSheet::setHeader()
     * @see ExcelSheet::footer()
     * @see ExcelSheet::setFooter()
     *
     * @return string
     */
    public function header(): string
    {
    }

    // header

    /**
     * Hides/unhides the sheet.
     *
     * @deprecated
     *
     * @param bool $hide
     *
     * @return bool
     */
    public function hidden(bool $hide): bool
    {
    }

    // hidden

    /**
     * Gets the hyperlink and its coordinates by index.
     *
     * @param int $index
     *
     * @return array
     */
    public function hyperlink(int $index): array
    {
    }

    // hyperlink

    /**
     * Returns the number of hyperlinks in the sheet.
     *
     * @return int
     */
    public function hyperlinkSize(): int
    {
    }

    // hyperlinkSize

    /**
     * Returns whether sheet is hidden.
     *
     * @see ExcelSheet::hidden()
     *
     * @return bool
     */
    public function isHidden(): bool
    {
    }

    //isHidden

    /**
     * Returns whether LibXL runs in trial or licensed mode.
     *
     * @return bool
     */
    public function isLicensed(): bool
    {
    }

    //isLicensed

    /**
     * Returns the header margin (in inches).
     *
     * @see ExcelSheet::footerMargin()
     * @see ExcelSheet::setHeader()
     *
     * @return float
     */
    public function headerMargin(): float
    {
    }

    // headerMargin

    /**
     * Set/Remove horizontal page break.
     *
     * @param int  $row   0-based row number
     * @param bool $break
     *
     * @return bool
     */
    public function horPageBreak(int $row, bool $break): bool
    {
    }

    // horPageBreak

    /**
     * Insert columns from column_start to column_end.
     *
     * @param int $column_start 0-based column number
     * @param int $column_end   0-based column number
     *
     * @return bool
     */
    public function insertCol(int $column_start, int $column_end): bool
    {
    }

    // insertCol

    /**
     * Insert rows from row_start to row_end.
     *
     * @param int $row_start 0-based row number
     * @param int $row_end   0-based row number
     *
     * @return bool
     */
    public function insertRow(int $row_start, int $row_end): bool
    {
    }

    // insertRow

    /**
     * Determine if a cell contains a date.
     *
     * @param int $row    0-based row number
     * @param int $column 0-based column number
     *
     * @return bool
     */
    public function isDate(int $row, int $column): bool
    {
    }

    // isDate

    /**
     * Determine if a cell contains a formula.
     *
     * @param int $row    0-based row number
     * @param int $column 0-based column number
     *
     * @return bool
     */
    public function isFormula(int $row, int $column): bool
    {
    }

    // isFormula

    /**
     * Returns the page orientation mode.
     *
     * @see ExcelSheet::setLandscape()
     *
     * @return bool true for landscape, false for portrait
     */
    public function landscape(): bool
    {
    }

    // landscape

    /**
     * Returns the 0-based last column in a sheet that contains a used cell.
     *
     * @see ExcelSheet::firstRow()
     * @see ExcelSheet::lastRow()
     * @see ExcelSheet::firstCol()
     *
     * @return int
     */
    public function lastCol(): int
    {
    }

    // lastCol

    /**
     * Returns the 0-based last row in a sheet that contains a used cell.
     *
     * @see ExcelSheet::firstRow()
     * @see ExcelSheet::firstCol()
     * @see ExcelSheet::lastCol()
     *
     * @return int
     */
    public function lastRow(): int
    {
    }

    // lastRow

    /**
     * Returns the bottom margin of the sheet (in inches).
     *
     * @see ExcelSheet::marginTop()
     * @see ExcelSheet::marginRight()
     * @see ExcelSheet::marginLeft()
     * @see ExcelSheet::setMarginBottom()
     *
     * @return float
     */
    public function marginBottom(): float
    {
    }

    // marginBottom

    /**
     * Returns the left margin of the sheet (in inches).
     *
     * @see ExcelSheet::marginTop()
     * @see ExcelSheet::marginRight()
     * @see ExcelSheet::marginBottom()
     * @see ExcelSheet::setMarginLeft()
     *
     * @return float
     */
    public function marginLeft(): float
    {
    }

    // marginLeft

    /**
     * Returns the right margin of the sheet (in inches).
     *
     * @see ExcelSheet::marginTop()
     * @see ExcelSheet::marginLeft()
     * @see ExcelSheet::marginBottom()
     * @see ExcelSheet::setMarginRight()
     *
     * @return float
     */
    public function marginRight(): float
    {
    }

    // marginRight

    /**
     * Returns the top margin of the sheet (in inches).
     *
     * @see ExcelSheet::marginRight()
     * @see ExcelSheet::marginLeft()
     * @see ExcelSheet::marginBottom()
     * @see ExcelSheet::setMarginTop()
     *
     * @return float
     */
    public function marginTop(): float
    {
    }

    // marginTop

    /**
     * Gets the merged cells by index.
     *
     * @param int $index
     *
     * @return array
     */
    public function merge(int $index): array
    {
    }

    // merge

    /**
     * Returns a number of merged cells in this worksheet.
     *
     * @return int
     */
    public function mergeSize(): int
    {
    }

    // mergeSize

    /**
     * Returns the name of the worksheet.
     *
     * @see ExcelSheet::setName()
     *
     * @return string
     */
    public function name(): string
    {
    }

    // name

    /**
     * Returns the number of named ranges in the sheet.
     *
     * @return int
     */
    public function namedRangeSize(): int
    {
    }

    // namedRangeSize

    /**
     * Returns the paper size.
     *
     * @see ExcelSheet::setPaper()
     *
     * @return int One of ExcelSheet::PAPER_* constants
     */
    public function paper(): int
    {
    }

    // paper

    /**
     * Returns whether the gridlines are printed.
     *
     * @see ExcelSheet::setPrintGridlines()
     *
     * @return bool
     */
    public function printGridlines(): bool
    {
    }

    // printGridlines

    /**
     * Returns whether the row and column headers are printed.
     *
     * @see ExcelSheet::setPrintHeaders()
     *
     * @return bool
     */
    public function printHeaders(): bool
    {
    }

    // printHeaders

    /**
     * Returns whether the sheet is protected.
     *
     * @see ExcelSheet::setProtect()
     *
     * @return bool
     */
    public function protect(): bool
    {
    }

    // protect

    /**
     * Read data from a specific cell
     * An ExcelFormat object will be assigned to $format if passed.
     *
     * @param int         $row          0-based row number
     * @param int         $column       0-based column number
     * @param null|ExcelFormat $format       (optional, default=null)
     * @param bool        $read_formula (optional, default=true)
     *
     * @return mixed
     */
    public function read(int $row, int $column, null|ExcelFormat &$format = null, bool $read_formula = true): mixed
    {
    }

    // read

    /**
     * Read an entire column worth of data.
     *
     * @param int  $column       0-based column number
     * @param int  $row_start    (optional, default=0)
     * @param null|int  $row_end      (optional, default=null)
     * @param bool $read_formula (optional, default=true)
     *
     * @return array or false if invalid row/column positions
     */
    public function readCol(int $column, int $row_start = 0, null|int $row_end = null, bool $read_formula = true): array
    {
    }

    // readCol

    /**
     * Read comment from a cell.
     *
     * @param int $row    0-based row number
     * @param int $column 0-based column number
     *
     * @return string
     */
    public function readComment(int $row, int $column): string
    {
    }

    // readComment

    /**
     * Read an entire row worth of data.
     *
     * @param int  $row          0-based row number
     * @param int  $column_start (optional, default=0)
     * @param int  $column_end   (optional, default=-1)
     * @param bool $read_formula (optional, default=true)
     *
     * @return array or false if invalid row/column positions
     */
    public function readRow(int $row, int $column_start = 0, int $column_end = -1, bool $read_formula = true): array
    {
    }

    // readRow

    /**
     * Remove columns from column_start to column_end.
     *
     * @param int $column_start 0-based column number
     * @param int $column_end   0-based column number
     *
     * @return bool
     */
    public function removeCol(int $column_start, int $column_end): bool
    {
    }

    // removeCol

    /**
     * Removes all data validations for the sheet (only for xlsx files).
     *
     * @since libXL 3.8.0.0
     *
     * @return bool
     */
    public function removeDataValidations(): bool
    {
    }

    // removeDataValidations

    /**
     * Remove rows from row_start to row_end.
     *
     * @param int $row_start 0-based row number
     * @param int $row_end   0-based row number
     *
     * @return bool
     */
    public function removeRow(int $row_start, int $row_end): bool
    {
    }

    // removeRow

    /**
     * Converts row and column to a cell reference.
     *
     * @param int  $row
     * @param int  $column
     * @param bool $row_relative (optional, default=true)
     * @param bool $col_relative (optional, default=true)
     *
     * @return string
     */
    public function rowColToAddr(int $row, int $column, bool $row_relative = true, bool $col_relative = true): string
    {
    }

    // rowColToAddr

    /**
     * Returns the row height.
     *
     * @see ExcelSheet::colWidth()
     * @see ExcelSheet::setColWidth()
     * @see ExcelSheet::setRowHeight()
     *
     * @param int $row 0-based row number
     *
     * @return float
     */
    public function rowHeight(int $row): float
    {
    }

    // rowHeight

    /**
     * Returns whether row is hidden.
     *
     * @param int $row 0-based row number
     *
     * @return bool
     */
    public function rowHidden(int $row): bool
    {
    }

    // rowHidden

    /**
     * Set cell format.
     *
     * @param int         $row    0-based row number
     * @param int         $column 0-based column number
     * @param ExcelFormat $format
     */
    public function setCellFormat(int $row, int $column, ExcelFormat $format)
    {
    }

    // setCellFormat

    /**
     * Hides column.
     *
     * @param int  $column 0-based column number
     * @param bool $hidden
     *
     * @return bool
     */
    public function setColHidden(int $column, bool $hidden): bool
    {
    }

    // setColHidden

    /**
     * Set the width of cells in a column.
     *
     * @see ExcelSheet::colWidth()
     * @see ExcelSheet::rowHeight()
     * @see ExcelSheet::setRowHeight()
     *
     * @param int         $column_start 0-based column number
     * @param int         $column_end   0-based column number
     * @param float       $width        (-1: autofit)
     * @param bool        $hidden       (optional, default=false)
     * @param ExcelFormat $format       (optional, default=null)
     *
     * @return bool
     */
    public function setColWidth(int $column_start, int $column_end, float $width, bool $hidden = false, null|ExcelFormat $format = null): bool
    {
    }

    // setColWidth

    /**
     * Sets the borders for autofit column widths feature. The method Sheet::setCol()
     * with -1 width value will affect only to the specified limited area.
     *
     * @param int $row_start    0-based row number
     * @param int $row_end      0-based row number
     * @param int $column_start 0-based column number
     * @param int $column_end   0-based column number
     *
     * @return bool
     */
    public function setAutofitArea(int $row_start = 0, int $row_end = -1, int $column_start = 0, int $column_end = -1): bool
    {
    }

    // setAutofitArea

    /**
     * Sets gridlines for displaying.
     *
     * @see ExcelSheet::displayGridlines()
     *
     * @param bool $value
     */
    public function setDisplayGridlines(bool $value)
    {
    }

    // setDisplayGridlines

    /**
     * Sets the footer text of the sheet when printed.
     *
     * @see ExcelSheet::footer()
     * @see ExcelSheet::header()
     * @see ExcelSheet::setHeader()
     *
     * @param string $footer
     * @param float  $margin
     *
     * @return bool
     */
    public function setFooter(string $footer, float $margin): bool
    {
    }

    // setFooter

    /**
     * Sets a flag of grouping rows summary.
     *
     * @see ExcelSheet::getGroupSummaryBelow()
     * @see ExcelSheet::getGroupSummaryRight()
     * @see ExcelSheet::setGroupSummaryRight()
     *
     * @param bool $direction true=below, false=above
     *
     * @return bool
     */
    public function setGroupSummaryBelow(bool $direction): bool
    {
    }

    // setGroupSummaryBelow

    /**
     * Sets a flag of grouping columns summary.
     *
     * @see ExcelSheet::getGroupSummaryBelow()
     * @see ExcelSheet::setGroupSummaryBelow()
     * @see ExcelSheet::getGroupSummaryRight()
     *
     * @param bool $direction true=right, false=left
     *
     * @return bool
     */
    public function setGroupSummaryRight(bool $direction): bool
    {
    }

    // setGroupSummaryRight

    /**
     * Sets a flag that the shhet is centered horizontally when printed.
     *
     * @see ExcelSheet::setVCenter()
     *
     * @param bool $value
     */
    public function setHCenter(bool $value)
    {
    }

    // setHCenter

    /**
     * Hides/unhides the sheet.
     *
     * @param bool $value
     *
     * @return bool
     */
    public function setHidden(bool $value): bool
    {
    }

    // setHidden

    /**
     * Set the header text of the sheet when printed.
     *
     * @see ExcelSheet::setFooter()
     * @see ExcelSheet::header()
     * @see ExcelSheet::footer()
     *
     * @param string $header
     * @param float  $margin
     *
     * @return bool
     */
    public function setHeader(string $header, float $margin): bool
    {
    }

    // setHeader

    /**
     * Sets landscape, or portrait mode for printing.
     *
     * @see ExcelSheet::landscape()
     *
     * @param bool $value true for landscape, false for portrait
     */
    public function setLandscape(bool $value)
    {
    }

    // setLandscape

    /**
     * Set the bottom margin of the sheet (in inches).
     *
     * @see ExcelSheet::setMargingTop()
     * @see ExcelSheet::setMargingLeft()
     * @see ExcelSheet::setMargingRight()
     *
     * @param float $margin
     */
    public function setMarginBottom(float $margin)
    {
    }

    // setMarginBottom

    /**
     * Set the left margin of the sheet (in inches).
     *
     * @see ExcelSheet::setMargingTop()
     * @see ExcelSheet::setMargingRight()
     * @see ExcelSheet::setMargingBottom()
     *
     * @param float $margin
     */
    public function setMarginLeft(float $margin)
    {
    }

    // setMarginLeft

    /**
     * Set the right margin of the sheet (in inches).
     *
     * @see ExcelSheet::setMargingTop()
     * @see ExcelSheet::setMargingLeft()
     * @see ExcelSheet::setMargingBottom()
     *
     * @param float $margin
     */
    public function setMarginRight(float $margin)
    {
    }

    // setMarginRight

    /**
     * Set the top margin of the sheet (in inches).
     *
     * @see ExcelSheet::setMargingLeft()
     * @see ExcelSheet::setMargingRight()
     * @see ExcelSheet::setMargingBottom()
     *
     * @param float $margin
     */
    public function setMarginTop(float $margin)
    {
    }

    // setMarginTop

    /**
     * Set cell merge range.
     *
     * @param int $row_start    0-based row number
     * @param int $row_end      0-based row number
     * @param int $column_start 0-based column number
     * @param int $column_end   0-based column number
     *
     * @return bool
     */
    public function setMerge(int $row_start, int $row_end, int $column_start, int $column_end): bool
    {
    }

    // setMerge

    /**
     * Sets the name of the worksheet.
     *
     * @see ExcelSheet::name()
     *
     * @param string $name
     */
    public function setName(string $name)
    {
    }

    // setName

    /**
     * Create a named range.
     *
     * @see ExcelSheet::delNamedRange()
     *
     * @param string $name
     * @param int    $row_from    0-based row number
     * @param int    $column_from 0-based column number
     * @param int    $row_to      0-based row number
     * @param int    $column_to   0-based column number
     * @param null|int    $scope_id
     *
     * @return bool
     */
    public function setNamedRange(string $name, int $row_from, int $row_to, int $column_from, int $column_to, null|int $scope_id = null): bool
    {
    }

    // setNamedRange

    /**
     * Sets the paper size.
     *
     * @see ExcelSheet::paper()
     *
     * @param int $paper One of ExcelSheet::PAPER_* constants
     */
    public function setPaper(int $paper)
    {
    }

    // setPaper

    /**
     * Fits sheet width and sheet height to wPages and hPages respectively.
     *
     * @param int $wPages
     * @param int $hPages
     *
     * @return bool
     */
    public function setPrintFit(int $wPages, int $hPages): bool
    {
    }

    // setPrintFit

    /**
     * Sets gridlines for printing.
     *
     * @see ExcelSheet::printGridlines()
     *
     * @param bool $value
     */
    public function setPrintGridlines(bool $value)
    {
    }

    // setPrintGridlines

    /**
     * Sets a flag to indicate row and column headers should be printed.
     *
     * @see ExcelSheet::printHeaders()
     *
     * @param bool $value
     */
    public function setPrintHeaders(bool $value)
    {
    }

    // setPrintHeaders

    /**
     * Sets repeated columns on each page from column_start to column_end.
     *
     * @see ExcelSheet::setPrintRepeatRows()
     * @see ExcelSheet::clearPrintRepeats()
     *
     * @param int $column_start 0-based column number
     * @param int $column_end   0-based column number
     *
     * @return bool
     */
    public function setPrintRepeatCols(int $column_start, int $column_end): bool
    {
    }

    // setPrintRepeatCols

    /**
     * Sets the color for the sheet's tab.
     *
     * @param int $color - one of the ExcelSheet::COLOR_* constants (optional, default=0)
     *
     * @return bool
     */
    public function setTabColor(int $color = 0): bool
    {
    }

    // setTabColor

    /**
     * Gets repeated columns on each page from colFirst to colLast. Returns false
     * if repeated columns aren't found.
     *
     * @return bool|array with keys "col_start"(int) and "col_end"(int)
     */
    public function printRepeatCols(): bool|array
    {
    }

    // printRepeatCols

    /**
     * Sets repeated rows on each page from row_start to row_end.
     *
     * @see ExcelSheet::setPrintRepeatCols()
     * @see ExcelSheet::clearPrintRepeats()
     *
     * @param int $row_start 0-based row number
     * @param int $row_end   0-based row number
     *
     * @return bool
     */
    public function setPrintRepeatRows(int $row_start, int $row_end): bool
    {
    }

    // setPrintRepeatRows

    /**
     * Gets repeated rows on each page from rowFirst to rowLast. Returns false
     * if repeated rows aren't found.
     *
     * @return bool|array with keys "row_start"(int) and "row_end"(int)
     */
    public function printRepeatRows(): bool|array
    {
    }

    // printRepeatRows

    /**
     * Protects or unprotects the worksheet.
     *
     * @see ExcelSheet::protect()
     *
     * @param bool   $value
     * @param string $password           (optional, default="")
     * @param int    $enhancedProtection ExcelSheet::PROT_ALL (optional, default=ExcelSheet::PROT_DEFAULT)
     */
    public function setProtect(bool $value, string $password = '', int $enhancedProtection = self::PROT_DEFAULT)
    {
    }

    // setProtect

    /**
     * Sets the right-to-left mode:
     * 1 - the text is displayed in right-to-left mode,
     * 0 - the text is displayed in left-to-right mode.
     *
     * @param int $mode
     */
    public function setRightToLeft(int $mode)
    {
    }

    // setRightToLeft

    /**
     * Set the height of cells in a row.
     *
     * @see ExcelSheet::rowHeight()
     * @see ExcelSheet::colWidth()
     * @see ExcelSheet::setColWidth()
     *
     * @param int         $row    0-based row number
     * @param float       $height
     * @param null|ExcelFormat $format (optional, default=null)
     * @param bool        $hidden (optional, default=false)
     *
     * @return bool
     */
    public function setRowHeight(int $row, float $height, ExcelFormat $format = null, bool $hidden = false): bool
    {
    }

    // setRowHeight

    /**
     * Hides row.
     *
     * @param int  $row    0-based row number
     * @param bool $hidden
     *
     * @return bool
     */
    public function setRowHidden(int $row, bool $hidden): bool
    {
    }

    // setRowHidden

    /**
     * Sets the first visible row and the leftmost visible column of the sheet.
     *
     * @param int $row
     * @param int $column
     *
     * @return bool
     */
    public function setTopLeftView(int $row, int $column): bool
    {
    }

    // setTopLeftView

    /**
     * Sets a flag that the sheet is centered vertically when printed.
     *
     * @see ExcelSheet::setHCenter()
     *
     * @param bool $value
     */
    public function setVCenter(bool $value)
    {
    }

    // setVCenter

    /**
     * Sets the zoom level of the current view. 100 is the usual view.
     *
     * @param int $value
     */
    public function setZoom(int $value)
    {
    }

    // setZoom

    /**
     * Sets the scaling factor for printing (as a percentage).
     *
     * @param int $value
     */
    public function setZoomPrint(int $value)
    {
    }

    // setZoomPrint

    /**
     * Gets the split information (position of frozen pane) in the sheet:
     * row - vertical position of the split;
     * col - horizontal position of the split.
     *
     * @return array
     */
    public function splitInfo(): array
    {
    }

    // splitInfo

    /**
     * Split sheet at indicated position.
     *
     * @param int $row    0-based row number
     * @param int $column 0-based column number
     */
    public function splitSheet(int $row, int $column)
    {
    }

    // splitSheet

    /**
     * Gets the table parameters by index.
     *
     * @param int $index (optional, default = 0)
     *
     * @return array with keys "name"(string), "row_first"(int), "col_first"(int), "row_last"(int), "col_last"(int), "header_row_count"(int) and "totals_row_count"(int)
     */
    public function table(int $index = 0): array
    {
    }

    // table

    /**
     * Returns the number of tables in the sheet.
     *
     * @return int
     */
    public function tableSize(): int
    {
    }

    // tableSize

    /**
     * Returns whether the sheet is centered vertically when printed.
     *
     * @see ExcelSheet::hcenter()
     * @see ExcelSheet::setVCenter()
     * @see ExcelSheet::setHCenter()
     *
     * @return bool
     */
    public function vcenter(): bool
    {
    }

    // vcenter

    /**
     * Set/Remove vertical page break.
     *
     * @param int  $column 0-based column number
     * @param bool $break
     *
     * @return bool
     */
    public function verPageBreak(int $column, bool $break): bool
    {
    }

    // verPageBreak

    /**
     * Write data into a cell.
     *
     * @param int         $row       0-based row number
     * @param int         $column    0-based column number
     * @param mixed       $data
     * @param null|ExcelFormat $format    (optional, default=null)
     * @param int         $data_type (optional, default=-1) One of ExcelFormat::AS_* constants
     *
     * @return bool
     */
    public function write(int $row, int $column, mixed $data, null|ExcelFormat $format = null, int $data_type = -1): bool
    {
    }

    // write

    /**
     * Write an array of values into a column.
     *
     * @param int         $column    0-based column number
     * @param array       $data
     * @param int         $row_start (optional, default=0)
     * @param null|ExcelFormat $format    (optional, default=null)
     * @param int         $data_type (optional, default=-1) One of ExcelFormat::AS_* constants
     *
     * @return bool
     */
    public function writeCol(int $column, array $data, int $row_start = 0, null|ExcelFormat $format = null, int $data_type = -1): bool
    {
    }

    // writeCol

    /**
     * Write comment to a cell.
     *
     * @param int    $row     0-based row number
     * @param int    $column  0-based column number
     * @param string $comment
     * @param string $author
     * @param int    $width
     * @param int    $height
     */
    public function writeComment(int $row, int $column, string $comment, string $author, int $width, int $height)
    {
    }

    // writeComment

    /**
     * Writes error into the cell with specified format. If format equals 0 then format is ignored.
     *
     * @param int         $row    (optional, default = 0)
     * @param int         $col    (optional, default = 0)
     * @param int         $error  - one of ExcelSheet::ERRORTYPE_* constants  (optional, default = 0)
     * @param null|ExcelFormat $format (optional, default = null)
     *
     * @return bool
     */
    public function writeError(int $row = 0, int $col = 0, int $error = 0, null|ExcelFormat $format = null): bool
    {
    }

    // writeError

    /**
     * Write an array of values into a row.
     *
     * @param int         $row          0-based row number
     * @param array       $data
     * @param int         $column_start (optional, default=0)
     * @param null|ExcelFormat $format       (optional, default=null)
     *
     * @return bool
     */
    public function writeRow(int $row, array $data, int $column_start = 0, null|ExcelFormat $format = null): bool
    {
    }

    // writeRow

    /**
     * Returns the zoom level of the current view as a percentage.
     *
     * @return int
     */
    public function zoom(): int
    {
    }

    // zoom

    /**
     * Returns the scaling factor for printing as a percentage.
     *
     * @return int
     */
    public function zoomPrint(): int
    {
    }

    // zoomPrint
} // end ExcelSheet
