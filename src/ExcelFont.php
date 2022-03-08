<?php

declare(strict_types=1);
/*
  +---------------------------------------------------------------------------+
  | ExcelFont                                                                 |
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
class ExcelFont
{
    public const NORMAL      = 0;
    public const SUPERSCRIPT = 1;
    public const SUBSCRIPT   = 2;

    public const UNDERLINE_NONE      = 0;
    public const UNDERLINE_SINGLE    = 1;
    public const UNDERLINE_DOUBLE    = 2;
    public const UNDERLINE_SINGLEACC = 33;
    public const UNDERLINE_DOUBLEACC = 34;

    /**
     * Create a font within an Excel workbook.
     *
     * @see ExcelBook::addFont()
     *
     * @param ExcelBook $book
     *
     * @return ExcelFont
     */
    public function __construct(ExcelBook $book)
    {
    }

    // __construct

    /**
     * Get, or set if bold is on or off.
     *
     * @param null|bool $bold (optional, default=null)
     *
     * @return bool
     */
    public function bold(bool|null $bold = null): bool
    {
    }

    // bold

    /**
     * Get, or set the font color.
     *
     * @param null|int $color (optional, default=null) One of ExcelFormat::COLOR_* constants
     *
     * @return int
     */
    public function color(null|int $color = null): int
    {
    }

    // color

    /**
     * Get, or set if italics are on or off.
     *
     * @param null|bool $italics (optional, default=null)
     *
     * @return bool
     */
    public function italics(null|bool $italics = null): bool
    {
    }

    // italics

    /**
     * Get, or set the font script mode.
     *
     * @param null|int $mode (optional, default=null) One of ExcelFont::NORMAL, ::SUBSCRIPT, or ::SUPERSCRIPT
     *
     * @return int
     */
    public function mode(null|int $mode = null): int
    {
    }

    // mode

    /**
     * Get, or set the font name.
     *
     * @param null|string $font_name (optional, default=null)
     *
     * @return string
     */
    public function name($font_name = null): string
    {
    }

    // name

    /**
     * Get, or set the font size.
     *
     * @param null|int $size (optional, default=null)
     *
     * @return int The current font size
     */
    public function size(null|int $size = null): int
    {
    }

    // size

    /**
     * Get, or set if strike-through is on or off.
     *
     * @param null|bool $strike (optional, default=null)
     *
     * @return bool
     */
    public function strike(null|bool $strike = null): bool
    {
    }

    // strike

    /**
     * Get, or set the underline style.
     *
     * @param null|int $underline (optional, default=null) One of ExcelFont::UNDERLINE_* constants
     *
     * @return int
     */
    public function underline(null|int $underline = null): int
    {
    }

    // underline
} // end ExcelFont
