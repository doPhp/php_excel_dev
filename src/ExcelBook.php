<?php

declare(strict_types=1);
/*
  +---------------------------------------------------------------------------+
  | ExcelBook                                                                 |
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
class ExcelBook
{
    public const PICTURETYPE_DIB  = 3;
    public const PICTURETYPE_EMF  = 4;
    public const PICTURETYPE_JPEG = 1;
    public const PICTURETYPE_PICT = 5;
    public const PICTURETYPE_PNG  = 0;
    public const PICTURETYPE_TIFF = 6;
    public const PICTURETYPE_WMF  = 2;

    public const SCOPE_UNDEFINED = -2;
    public const SCOPE_WORKBOOK  = -1;

    public const SHEETTYPE_CHART   = 1;
    public const SHEETTYPE_SHEET   = 0;
    public const SHEETTYPE_UNKNOWN = 2;

    /**
     * Create a new Excel workbook.
     *
     * @param null|string   $license_name (optional, default=null)
     * @param null|string   $license_key  (optional, default=null)
     * @param bool          $excel_2007   (optional, default=false)
     *
     * @return ExcelBook
     */
    public function __construct(null|string $license_name = null, null|string $license_key = null, bool $excel_2007 = false): ExcelBook
    {
    }

    // __construct

    /**
     * Get or set the active Excel worksheet number.
     *
     * @see ExcelBook::getActiveSheet()
     * @see ExcelBook::setActiveSheet()
     *
     * @param null|int $sheet_number (optional, default=null) If supplied, the 0-based worksheet number to set as active
     *
     * @return int 0-based active worksheet number
     */
    public function activeSheet(null|int $sheet_number = null): int
    {
    }

    // activeSheet

    /**
     * Create a custom cell format.
     *
     * @see ExcelBook::getCustomFormat()
     *
     * @param string $format_string
     *
     * @return int The ID assigned to the new format
     */
    public function addCustomFormat(string $format_string): int
    {
    }

    // addCustomFormat

    /**
     * Add or copy an ExcelFont object.
     *
     * @param null|ExcelFont $font (optional, default=null) Font to copy
     *
     * @return ExcelFont
     */
    public function addFont(null|ExcelFont $font = null): ExcelFont
    {
    }

    // addFont

    /**
     * Add or copy an ExcelFormat object.
     *
     * @param null|ExcelFormat $format (optional, default=null) Format to copy
     *
     * @return ExcelFormat
     */
    public function addFormat(null|ExcelFormat $format = null): ExcelFormat
    {
    }

    // addFormat

    /**
     * Adds a picture to the workbook as link (only for xlsx files).
     * Supports BMP, DIB, PNG, JPG and WMF picture formats. Use picture identifier with
     * \ExcelSheet::setPictureDim() or \ExcelSheet::setPictureScale().
     *
     * @see \ExcelSheet::setPictureDim()
     * @see \ExcelSheet::setPictureScale()
     * @since libXl 3.8.0.0
     *
     * @param string $filename
     * @param bool   $insert   (optional, default = false) false - stores only a link to file, true - stores a picture and a link to file
     *
     * @return int picture identifier
     */
    public function addPictureAsLink(string $filename, bool $insert = false): int
    {
    }

    // addPictureAsLink

    /**
     * Add a picture from file.
     *
     * @see ExcelBook::addPictureFromString()
     * @see ExcelSheet::addPictureScaled()
     * @see ExcelSheet::addPictureDim()
     *
     * @param string $filename
     *
     * @return int A picture ID
     */
    public function addPictureFromFile(string $filename): int
    {
    }

    // addPictureFromFile

    /**
     * Add a picture from string.
     *
     * @see ExcelBook::addPictureFromFile()
     * @see ExcelSheet::addPictureScaled()
     * @see ExcelSheet::addPictureDim()
     *
     * @param string $data
     *
     * @return int A picture ID
     */
    public function addPictureFromString(string $data): int
    {
    }

    // addPictureFromString

    /**
     * Add a worksheet to a workbook.
     *
     * @param string $name The name for the new worksheet
     *
     * @return ExcelSheet The worksheet created
     */
    public function addSheet(string $name): ExcelSheet
    {
    }

    // addSheet

    /**
     * Returns BIFF version of binary file. Used for xls format only.
     *
     * @return int BIFF version
     */
    public function biffVersion(): int
    {
    }

    // biffVersion

    /**
     * Packs red, green, and blue components in color value.  Used for xlsx format only.
     *
     * @see ExcelBook::colorUnpack()
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     *
     * @return int
     */
    public function colorPack(int $red, int $green, int $blue): int
    {
    }

    // colorPack

    /**
     * Unpacks color value into red, green, and blue components.  Used for xlsx format only.
     *
     * @see ExcelBook::colorPack()
     *
     * @param int $color One of ExcelFormat::COLOR_* constants
     *
     * @return array with keys "red"(int), "green"(int), and "blue"(int)
     */
    public function colorUnpack(int $color): array
    {
    }

    // colorUnpack

    /**
     * Create a copy of a worksheet in a workbook.
     *
     * @param string $name         The name for the new worksheet
     * @param int    $sheet_number The 0-based number of the source worksheet to copy
     *
     * @return ExcelSheet The worksheet created
     */
    public function copySheet(string $name, int $sheet_number): ExcelSheet
    {
    }

    // copySheet

    /**
     * Delete an Excel worksheet.
     *
     * @param int $sheet_number 0-based worksheet number to delete
     *
     * @return bool True if sheet deleted, false if $sheet_number invalid
     */
    public function deleteSheet(int $sheet_number): bool
    {
    }

    // deleteSheet

    /**
     * Get the active worksheet inside a workbook.
     *
     * @see ExcelBook::activeSheet()
     * @see ExcelBook::setActiveSheet()
     *
     * @return int 0-based active worksheet number
     */
    public function getActiveSheet(): int
    {
    }

    // getActiveSheet

    /**
     * Get an array of all ExcelFormat objects used inside a workbook.
     *
     * @return array of ExcelFormat objects
     */
    public function getAllFormats(): array
    {
    }

    // getAllFormats

    /**
     * Get a custom cell format.
     *
     * @see ExcelBook::addCustomFormat()
     *
     * @param int $id
     *
     * @return string
     */
    public function getCustomFormat(int $id): string
    {
    }

    // getCustomFormat

    /**
     * Get the default font.
     *
     * @see ExcelBook::setDefaultFont()
     *
     * @return array with keys "font"(string) and "font_size"(int)
     */
    public function getDefaultFont(): array
    {
    }

    // getDefaultFont

    /**
     * Get Excel error string.
     *
     * @return string Description of last error that occurred, or false if no error
     */
    public function getError(): string
    {
    }

    // getError

    /**
     * Get LibXL version.
     *
     * @return string LibXl library version
     */
    public function getLibXlVersion(): string
    {
    }

    // getLibXlVersion

    /**
     * Returns a number of pictures in this workbook.
     *
     * @return int Number of pictures in Workbook
     */
    public function getNumPictures(): int
    {
    }

    // getNumPictures

    /**
     * Get PHP excel extension version.
     *
     * @return string PHP Excel version
     */
    public function getPhpExcelVersion(): string
    {
    }

    // getPhpExcelVersion

    /**
     * Returns a picture at position index.
     *
     * @param int $index
     *
     * @return array with keys "data"(string) and "type"(int)
     */
    public function getPicture(int $index): array
    {
    }

    // getPicture

    /**
     * Returns whether the R1C1 reference mode is active.
     *
     * @return bool
     */
    public function getRefR1C1(): bool
    {
    }

    // getRefR1C1

    /**
     * Get an Excel worksheet.
     *
     * @param int $sheet_number (optional, default=0) 0-based worksheet number
     *
     * @return ExcelSheet or false if $sheet_number invalid
     */
    public function getSheet(int $sheet_number = 0): ExcelSheet
    {
    }

    // getSheet

    /**
     * Get an Excel sheet by name.
     *
     * @param string $name
     * @param bool   $case_insensitive (optional, default=false)
     *
     * @return ExcelSheet
     */
    public function getSheetByName(string $name, bool $case_insensitive = false): ExcelSheet
    {
    }

    // getSheetByName

    /**
     * Inserts a new sheet to this book at position index, returns the sheet handle. Set initSheet
     * to 0 if you wish to add a new empty sheet or use existing sheet's handle for copying.
     *
     * @param int        $index
     * @param string     $name
     * @param null|ExcelSheet $sheet (optional)
     *
     * @return ExcelSheet
     */
    public function insertSheet(int $index, string $name, null|ExcelSheet $sheet = null): ExcelSheet
    {
    }

    // insertSheet

    /**
     * Returns whether the 1904 date system is active:
     * true - 1904 date system,
     * false - 1900 date system.
     *
     * @return bool
     */
    public function isDate1904(): bool
    {
    }

    // isDate1904

    /**
     * Returns whether the workbook is a template.
     *
     * @return bool
     */
    public function isTemplate(): bool
    {
    }

    // isTemplate

    /**
     * Load Excel data string.
     *
     * @param string $data
     *
     * @return bool
     */
    public function load(string $data): bool
    {
    }

    // load

    /**
     * Load Excel from file.
     *
     * @param string $filename
     *
     * @return bool
     */
    public function loadFile(string $filename): bool
    {
    }

    // loadFile

    /**
     * Moves a sheet with specified index to a new position. Returns false if error occurs.
     *
     * @since libXL 3.8.0.0
     *
     * @param int $srcIndex
     * @param int $dstIndex
     *
     * @return bool
     */
    public function moveSheet(int $srcIndex, int $dstIndex): bool
    {
    }

    // moveSheet

    /**
     * Pack a unix timestamp into an Excel double.
     *
     * @see ExcelBook::unpackDate()
     *
     * @param int $timestamp
     *
     * @return float
     */
    public function packDate(int $timestamp): float
    {
    }

    // packDate

    /**
     * Pack a date from single values into an Excel double.
     *
     * with year=0, month=0 and day=0 you can generate a time-only value
     * - if you click on a cell with time-format, in the "formula bar" will appear a time only (without date)
     *
     * @param int $year
     * @param int $month
     * @param int $day
     * @param int $hour
     * @param int $minute
     * @param int $second
     *
     * @return float
     */
    public function packDateValues(int $year, int $month, int $day, int $hour, int $minute, int $second): float
    {
    }

    // packDateValues

    /**
     * Returns whether RGB mode is active.
     *
     * @see ExcelBook::setRGBMode()
     *
     * @return bool
     */
    public function rgbMode(): bool
    {
    }

    // rgbMode

    /**
     * Save Excel file.
     *
     * @param null|string $filename (optional, default=null)
     *
     * @return string|bool If $filename is null, returns string, otherwise returns bool true if OK, false if not
     */
    public function save(null|string $filename = null): string|bool
    {
    }

    // save

    /**
     * Set the active worksheet.
     *
     * @see ExcelBook::getActiveSheet()
     * @see ExcelBook::activeSheet()
     *
     * @param int $sheet_number 0-based worksheet to make active
     *
     * @return bool
     */
    public function setActiveSheet(int $sheet_number): bool
    {
    }

    // setActiveSheet

    /**
     * Sets the date system mode:
     * true - 1904 date system,
     * false - 1900 date system (default).
     *
     * @param bool $date_type
     *
     * @return bool
     */
    public function setDate1904(bool $date_type): bool
    {
    }

    // setDate1904

    /**
     * Set the default font and size.
     *
     * @see ExcelBook::getDefaultFont()
     *
     * @param string $font_name
     * @param string $font_size
     */
    public function setDefaultFont(string $font_name, string $font_size)
    {
    }

    // setDefaultFont

    /**
     * Set the locale<br>
     * possible values: '.1252' (Windows-1252 or Cp1252), '.OCP' (OEM CodePage), default: '.ACP' (ANSI CodePage) if empty.
     *
     * @param string $locale
     */
    public function setLocale(string $locale)
    {
    }

    // setLocale

    /**
     * Sets the R1C1 reference mode.
     *
     * @param bool $active
     */
    public function setRefR1C1(bool $active)
    {
    }

    // setRefR1C1

    /**
     * Sets RGB mode on or off.
     *
     * @see ExcelBook::rgbMode()
     *
     * @param bool $mode
     */
    public function setRGBMode(bool $mode)
    {
    }

    // setRGBMode

    /**
     * Sets the template flag, if the workbook is template.
     *
     * @param bool $mode
     */
    public function setTemplate(bool $mode)
    {
    }

    // setTemplate

    /**
     * Get the number of worksheets inside a workbook.
     *
     * @return int
     */
    public function sheetCount(): int
    {
    }

    // sheetCount

    /**
     * Returns type of sheet with specified index:
     * 0 - sheet
     * 1 - chart
     * 2 - unknown.
     *
     * @param int $sheet
     *
     * @return int
     */
    public function sheetType(int $sheet): int
    {
    }

    // sheetType

    /**
     * Unpack an Excel double into a unix timestamp.
     *
     * @see ExcelBook::packDate()
     *
     * @param float $date
     *
     * @return int
     */
    public function unpackDate(float $date): int
    {
    }

    // unpackDate
} // end ExcelBook
