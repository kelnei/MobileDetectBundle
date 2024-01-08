<?php

declare(strict_types=1);

/*
 * This file is part of the MobileDetectBundle.
 *
 * (c) Nikolay Ivlev <nikolay.kotovsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MobileDetectBundle\DeviceDetector;

use Detection\Exception\MobileDetectException;

/**
 * @method bool isiPhone()
 * @method bool isBlackBerry()
 * @method bool isPixel()
 * @method bool isHTC()
 * @method bool isNexus()
 * @method bool isDell()
 * @method bool isMotorola()
 * @method bool isSamsung()
 * @method bool isLG()
 * @method bool isSony()
 * @method bool isAsus()
 * @method bool isXiaomi()
 * @method bool isNokiaLumia()
 * @method bool isMicromax()
 * @method bool isPalm()
 * @method bool isVertu()
 * @method bool isPantech()
 * @method bool isFly()
 * @method bool isWiko()
 * @method bool isiMobile()
 * @method bool isSimValley()
 * @method bool isWolfgang()
 * @method bool isAlcatel()
 * @method bool isNintendo()
 * @method bool isAmoi()
 * @method bool isINQ()
 * @method bool isOnePlus()
 * @method bool isGenericPhone()
 * @method bool isiPad()
 * @method bool isNexusTablet()
 * @method bool isGoogleTablet()
 * @method bool isSamsungTablet()
 * @method bool isKindle()
 * @method bool isSurfaceTablet()
 * @method bool isHPTablet()
 * @method bool isAsusTablet()
 * @method bool isBlackBerryTablet()
 * @method bool isHTCtablet()
 * @method bool isMotorolaTablet()
 * @method bool isNookTablet()
 * @method bool isAcerTablet()
 * @method bool isToshibaTablet()
 * @method bool isLGTablet()
 * @method bool isFujitsuTablet()
 * @method bool isPrestigioTablet()
 * @method bool isLenovoTablet()
 * @method bool isDellTablet()
 * @method bool isYarvikTablet()
 * @method bool isMedionTablet()
 * @method bool isArnovaTablet()
 * @method bool isIntensoTablet()
 * @method bool isIRUTablet()
 * @method bool isMegafonTablet()
 * @method bool isEbodaTablet()
 * @method bool isAllViewTablet()
 * @method bool isArchosTablet()
 * @method bool isAinolTablet()
 * @method bool isNokiaLumiaTablet()
 * @method bool isSonyTablet()
 * @method bool isPhilipsTablet()
 * @method bool isCubeTablet()
 * @method bool isCobyTablet()
 * @method bool isMIDTablet()
 * @method bool isMSITablet()
 * @method bool isSMiTTablet()
 * @method bool isRockChipTablet()
 * @method bool isFlyTablet()
 * @method bool isbqTablet()
 * @method bool isHuaweiTablet()
 * @method bool isNecTablet()
 * @method bool isPantechTablet()
 * @method bool isBronchoTablet()
 * @method bool isVersusTablet()
 * @method bool isZyncTablet()
 * @method bool isPositivoTablet()
 * @method bool isNabiTablet()
 * @method bool isKoboTablet()
 * @method bool isDanewTablet()
 * @method bool isTexetTablet()
 * @method bool isPlaystationTablet()
 * @method bool isTrekstorTablet()
 * @method bool isPyleAudioTablet()
 * @method bool isAdvanTablet()
 * @method bool isDanyTechTablet()
 * @method bool isGalapadTablet()
 * @method bool isMicromaxTablet()
 * @method bool isKarbonnTablet()
 * @method bool isAllFineTablet()
 * @method bool isPROSCANTablet()
 * @method bool isYONESTablet()
 * @method bool isChangJiaTablet()
 * @method bool isGUTablet()
 * @method bool isPointOfViewTablet()
 * @method bool isOvermaxTablet()
 * @method bool isHCLTablet()
 * @method bool isDPSTablet()
 * @method bool isVistureTablet()
 * @method bool isCrestaTablet()
 * @method bool isMediatekTablet()
 * @method bool isConcordeTablet()
 * @method bool isGoCleverTablet()
 * @method bool isModecomTablet()
 * @method bool isVoninoTablet()
 * @method bool isECSTablet()
 * @method bool isStorexTablet()
 * @method bool isVodafoneTablet()
 * @method bool isEssentielBTablet()
 * @method bool isRossMoorTablet()
 * @method bool isiMobileTablet()
 * @method bool isTolinoTablet()
 * @method bool isAudioSonicTablet()
 * @method bool isAMPETablet()
 * @method bool isSkkTablet()
 * @method bool isTecnoTablet()
 * @method bool isJXDTablet()
 * @method bool isiJoyTablet()
 * @method bool isFX2Tablet()
 * @method bool isXoroTablet()
 * @method bool isViewsonicTablet()
 * @method bool isVerizonTablet()
 * @method bool isOdysTablet()
 * @method bool isCaptivaTablet()
 * @method bool isIconbitTablet()
 * @method bool isTeclastTablet()
 * @method bool isOndaTablet()
 * @method bool isJaytechTablet()
 * @method bool isBlaupunktTablet()
 * @method bool isDigmaTablet()
 * @method bool isEvolioTablet()
 * @method bool isLavaTablet()
 * @method bool isAocTablet()
 * @method bool isMpmanTablet()
 * @method bool isCelkonTablet()
 * @method bool isWolderTablet()
 * @method bool isMediacomTablet()
 * @method bool isMiTablet()
 * @method bool isNibiruTablet()
 * @method bool isNexoTablet()
 * @method bool isLeaderTablet()
 * @method bool isUbislateTablet()
 * @method bool isPocketBookTablet()
 * @method bool isKocasoTablet()
 * @method bool isHisenseTablet()
 * @method bool isHudl()
 * @method bool isTelstraTablet()
 * @method bool isGenericTablet()
 * @method bool isAndroidOS()
 * @method bool isBlackBerryOS()
 * @method bool isPalmOS()
 * @method bool isSymbianOS()
 * @method bool isWindowsMobileOS()
 * @method bool isWindowsPhoneOS()
 * @method bool isiOS()
 * @method bool isiPadOS()
 * @method bool isSailfishOS()
 * @method bool isMeeGoOS()
 * @method bool isMaemoOS()
 * @method bool isJavaOS()
 * @method bool iswebOS()
 * @method bool isbadaOS()
 * @method bool isBREWOS()
 * @method bool isChrome()
 * @method bool isDolfin()
 * @method bool isOpera()
 * @method bool isSkyfire()
 * @method bool isEdge()
 * @method bool isIE()
 * @method bool isFirefox()
 * @method bool isBolt()
 * @method bool isTeaShark()
 * @method bool isBlazer()
 * @method bool isSafari()
 * @method bool isWeChat()
 * @method bool isUCBrowser()
 * @method bool isbaiduboxapp()
 * @method bool isbaidubrowser()
 * @method bool isDiigoBrowser()
 * @method bool isMercury()
 * @method bool isObigoBrowser()
 * @method bool isNetFront()
 * @method bool isGenericBrowser()
 * @method bool isPaleMoon()
 * @method bool isWebKit()
 * @method bool isConsole()
 * @method bool isWatch()
 */
interface MobileDetectorInterface
{
    public const VERSION_TYPE_STRING = 'text';

    public const VERSION_TYPE_FLOAT = 'float';

    /**
     * Magic overloading method.
     *
     * @method bool is[...]()
     *
     * @throws BadMethodCallException   when the method doesn't exist and doesn't start with 'is'
     * @throws \Exception
     * @throws InvalidArgumentException
     *
     * @return bool
     */
    public function __call(string $name, array $arguments);

    /**
     * Get the current script version.
     * Used in demo.php file.
     *
     * @return string the version number in semantic version format
     */
    public function getVersion(): string;

    /**
     * On startup Mobile Detect library will auto-initiate from the existing
     * HTTP headers extracted from $_SERVER.
     */
    public function autoInitKnownHttpHeaders(): void;

    /**
     * Set the HTTP Headers. Must be PHP-flavored. This method will reset existing headers.
     *
     * @param array $httpHeaders The headers to set. If null, then using PHP's _SERVER to extract
     *                           the headers. The default null is left for backwards compatibility.
     */
    public function setHttpHeaders(array $httpHeaders = []): void;

    /**
     * Retrieves the HTTP headers.
     */
    public function getHttpHeaders(): array;

    public function hasHttpHeaders(): bool;

    /**
     * Retrieves a particular header. If it doesn't exist, no exception/error is caused.
     * Simply null is returned.
     *
     * @param string $header The name of the header to retrieve. Can be HTTP compliant such as
     *                       "User-Agent" or "X-Device-User-Agent" or can be php-esque with the
     *                       all-caps, HTTP_ prefixed, underscore separated awesomeness.
     *
     * @return string|null the value of the header
     */
    public function getHttpHeader(string $header): ?string;

    public function getMobileHeaders(): array;

    /**
     * Get all possible HTTP headers that
     * can contain the User-Agent string.
     *
     * @return array list of HTTP headers
     */
    public function getUaHttpHeaders(): array;

    /**
     * Retrieves the HTTP CloudFront headers
     * that trigger a mobile detection.
     */
    public function getCloudFrontHttpHeaders(): array;

    /**
     * Set the User-Agent to be used.
     *
     * @param string $userAgent the User-Agent string
     */
    public function setUserAgent(string $userAgent): string;

    /**
     * Retrieve the User-Agent.
     *
     * @return string|null the user agent if it's set
     */
    public function getUserAgent(): ?string;

    public function hasUserAgent(): bool;

    public function isUserAgentEmpty(): bool;

    public function getMatchingRegex(): ?string;

    public function getMatchesArray(): ?array;

    /**
     * Retrieve the list of known phone devices.
     *
     * @return array list of phone devices
     */
    public static function getPhoneDevices(): array;

    /**
     * Retrieve the list of known tablet devices.
     *
     * @return array list of tablet devices
     */
    public static function getTabletDevices(): array;

    /**
     * Retrieve the list of known browsers. Specifically, the user agents.
     *
     * @return array list of browsers / user agents
     */
    public static function getBrowsers(): array;

    /**
     * Method gets the mobile detection rules.
     * This method is used for the magic methods $detect->is*().
     * Retrieve the current set of rules.
     */
    public function getRules(): array;

    /**
     * Retrieve the list of mobile operating systems.
     *
     * @return array the list of mobile operating systems
     */
    public static function getOperatingSystems(): array;

    /**
     * Check the HTTP headers for signs of mobile.
     * This is the fastest mobile check possible; it's used
     * inside isMobile() method.
     */
    public function checkHttpHeadersForMobile(): bool;

    /**
     * Check if the device is mobile.
     * Returns true if any type of mobile device detected, including special ones.
     *
     * @throws MobileDetectException
     */
    public function isMobile(): bool;

    /**
     * Check if the device is a tablet.
     * Return true if any type of tablet device is detected.
     *
     * @throws MobileDetectException
     */
    public function isTablet(): bool;

    /**
     * Checks if a rule (e.g. isIphone, isIOS, etc.) matches its regex against the User-Agent.
     *
     * @throws MobileDetectException
     */
    public function is(string $ruleName): bool;

    /**
     * Some detection rules are relative (not standard),
     * because of the diversity of devices, vendors and
     * their conventions in representing the User-Agent or
     * the HTTP headers.
     *
     * This method will be used to check custom regexes against
     * the User-Agent string.
     *
     * @todo: search in the HTTP headers too.
     */
    public function match(string $regex, string $userAgent): bool;

    /**
     * Prepare the version number.
     *
     * @todo Remove the error suppression from str_replace() call.
     *
     * @param string $ver The string version, like "2.6.21.2152";
     */
    public function prepareVersionNo(string $ver): float;

    /**
     * Check the version of the given property in the User-Agent.
     * Will return a float number. (e.g. 2_0 will return 2.0, 4.3.1 will return 4.31).
     *
     * @param string $propertyName The name of the property. See self::getProperties() array
     *                             keys for all possible properties.
     * @param string $type         Either self::VERSION_TYPE_STRING to get a string value or
     *                             self::VERSION_TYPE_FLOAT indicating a float value. This parameter
     *                             is optional and defaults to self::VERSION_TYPE_STRING. Passing an
     *                             invalid parameter will default to the type as well.
     *
     * @return string|float|false the version of the property we are trying to extract
     */
    public function version(string $propertyName, string $type = self::VERSION_TYPE_STRING): bool|float|string;

    public static function flattenHeaders(array $httpHeaders): string;

    /**
     * Get the properties array.
     */
    public static function getProperties(): array;
}
