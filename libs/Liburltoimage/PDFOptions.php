<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: urltoimage/urltoimage.proto

namespace Liburltoimage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *https://pptr.dev/api/puppeteer.pdfoptions
 *
 * Generated from protobuf message <code>liburltoimage.PDFOptions</code>
 */
class PDFOptions extends \Google\Protobuf\Internal\Message
{
    /**
     *格式A3,A4,A5,Letter,default A4
     *
     * Generated from protobuf field <code>string format = 1;</code>
     */
    private $format = '';
    /**
     * Generated from protobuf field <code>bool displayHeaderFooter = 2;</code>
     */
    private $displayHeaderFooter = false;
    /**
     * Generated from protobuf field <code>string footerTemplate = 3;</code>
     */
    private $footerTemplate = '';
    /**
     * Generated from protobuf field <code>string headerTemplate = 4;</code>
     */
    private $headerTemplate = '';
    /**
     * Generated from protobuf field <code>string height = 5;</code>
     */
    private $height = '';
    /**
     * Generated from protobuf field <code>string width = 6;</code>
     */
    private $width = '';
    /**
     *是否横向（默认是竖）
     *
     * Generated from protobuf field <code>bool landscape = 7;</code>
     */
    private $landscape = false;
    /**
     *是否透明
     *
     * Generated from protobuf field <code>bool omitBackground = 8;</code>
     */
    private $omitBackground = false;
    /**
     * Generated from protobuf field <code>string pageRanges = 9;</code>
     */
    private $pageRanges = '';
    /**
     *边距
     *
     * Generated from protobuf field <code>.liburltoimage.PDFMargin margin = 10;</code>
     */
    private $margin = null;
    /**
     * Generated from protobuf field <code>bool printBackground = 11;</code>
     */
    private $printBackground = false;
    /**
     * Generated from protobuf field <code>bool preferCSSPageSize = 12;</code>
     */
    private $preferCSSPageSize = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $format
     *          格式A3,A4,A5,Letter,default A4
     *     @type bool $displayHeaderFooter
     *     @type string $footerTemplate
     *     @type string $headerTemplate
     *     @type string $height
     *     @type string $width
     *     @type bool $landscape
     *          是否横向（默认是竖）
     *     @type bool $omitBackground
     *          是否透明
     *     @type string $pageRanges
     *     @type \Liburltoimage\PDFMargin $margin
     *          边距
     *     @type bool $printBackground
     *     @type bool $preferCSSPageSize
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Urltoimage\Urltoimage::initOnce();
        parent::__construct($data);
    }

    /**
     *格式A3,A4,A5,Letter,default A4
     *
     * Generated from protobuf field <code>string format = 1;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     *格式A3,A4,A5,Letter,default A4
     *
     * Generated from protobuf field <code>string format = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->format = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool displayHeaderFooter = 2;</code>
     * @return bool
     */
    public function getDisplayHeaderFooter()
    {
        return $this->displayHeaderFooter;
    }

    /**
     * Generated from protobuf field <code>bool displayHeaderFooter = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisplayHeaderFooter($var)
    {
        GPBUtil::checkBool($var);
        $this->displayHeaderFooter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string footerTemplate = 3;</code>
     * @return string
     */
    public function getFooterTemplate()
    {
        return $this->footerTemplate;
    }

    /**
     * Generated from protobuf field <code>string footerTemplate = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFooterTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->footerTemplate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string headerTemplate = 4;</code>
     * @return string
     */
    public function getHeaderTemplate()
    {
        return $this->headerTemplate;
    }

    /**
     * Generated from protobuf field <code>string headerTemplate = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHeaderTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->headerTemplate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string height = 5;</code>
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>string height = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkString($var, True);
        $this->height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string width = 6;</code>
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Generated from protobuf field <code>string width = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkString($var, True);
        $this->width = $var;

        return $this;
    }

    /**
     *是否横向（默认是竖）
     *
     * Generated from protobuf field <code>bool landscape = 7;</code>
     * @return bool
     */
    public function getLandscape()
    {
        return $this->landscape;
    }

    /**
     *是否横向（默认是竖）
     *
     * Generated from protobuf field <code>bool landscape = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setLandscape($var)
    {
        GPBUtil::checkBool($var);
        $this->landscape = $var;

        return $this;
    }

    /**
     *是否透明
     *
     * Generated from protobuf field <code>bool omitBackground = 8;</code>
     * @return bool
     */
    public function getOmitBackground()
    {
        return $this->omitBackground;
    }

    /**
     *是否透明
     *
     * Generated from protobuf field <code>bool omitBackground = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setOmitBackground($var)
    {
        GPBUtil::checkBool($var);
        $this->omitBackground = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string pageRanges = 9;</code>
     * @return string
     */
    public function getPageRanges()
    {
        return $this->pageRanges;
    }

    /**
     * Generated from protobuf field <code>string pageRanges = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPageRanges($var)
    {
        GPBUtil::checkString($var, True);
        $this->pageRanges = $var;

        return $this;
    }

    /**
     *边距
     *
     * Generated from protobuf field <code>.liburltoimage.PDFMargin margin = 10;</code>
     * @return \Liburltoimage\PDFMargin
     */
    public function getMargin()
    {
        return $this->margin;
    }

    /**
     *边距
     *
     * Generated from protobuf field <code>.liburltoimage.PDFMargin margin = 10;</code>
     * @param \Liburltoimage\PDFMargin $var
     * @return $this
     */
    public function setMargin($var)
    {
        GPBUtil::checkMessage($var, \Liburltoimage\PDFMargin::class);
        $this->margin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool printBackground = 11;</code>
     * @return bool
     */
    public function getPrintBackground()
    {
        return $this->printBackground;
    }

    /**
     * Generated from protobuf field <code>bool printBackground = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrintBackground($var)
    {
        GPBUtil::checkBool($var);
        $this->printBackground = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool preferCSSPageSize = 12;</code>
     * @return bool
     */
    public function getPreferCSSPageSize()
    {
        return $this->preferCSSPageSize;
    }

    /**
     * Generated from protobuf field <code>bool preferCSSPageSize = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setPreferCSSPageSize($var)
    {
        GPBUtil::checkBool($var);
        $this->preferCSSPageSize = $var;

        return $this;
    }

}
