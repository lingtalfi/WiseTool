<?php


namespace Ling\WiseTool;


use Ling\WiseTool\Exception\WiseToolException;

/**
 * The WiseTool class.
 *
 * This is just an adaptor class.
 *
 *
 * Did you ever encounter the following notification words?
 *
 * - warning
 * - info
 * - success
 * - error
 *
 * Those are pretty standard notification types.
 * However, if if you've worked with bootstrap 4, you'll see that they have some notification classes, but the wording
 * is a little bit different:
 *
 * - warning
 * - primary
 * - success
 * - danger
 *
 * Ok.
 * Now let me add my own, one letter variation:
 *
 * - w (warning)
 * - i (info)
 * - s (success)
 * - e (error)
 *
 *
 * I use those some times in some notifying tools I create.
 *
 *
 * And so we end up with those notifications which basically are the same, but they just have different names.
 * The goal of this class is to provide easy translation from one set to another.
 *
 * The first set is called regular, the second is called bootstrap, and the third (one letter) is called wise.
 *
 *
 */
class WiseTool
{

    /**
     * Returns the regular version of the given wise notification type.
     *
     * @param string $wiseType
     * @return string
     * @throws WiseToolException
     */
    public static function wiseToRegular(string $wiseType): string
    {
        switch ($wiseType) {
            case "w":
                return "warning";
            case "i":
                return "info";
            case "s":
                return "success";
            case "e":
                return "error";
            default:
                throw new WiseToolException("Unknown wise type $wiseType.");
                break;
        }
    }


    /**
     * Returns the bootstrap version of the given wise notification type.
     *
     * @param string $wiseType
     * @return string
     * @throws WiseToolException
     */
    public static function wiseToBootstrap(string $wiseType): string
    {
        switch ($wiseType) {
            case "w":
                return "warning";
            case "i":
                return "primary";
            case "s":
                return "success";
            case "e":
                return "danger";
            default:
                throw new WiseToolException("Unknown wise type $wiseType.");
                break;
        }
    }


    /**
     * Returns the bootstrap version of the given regular notification type.
     *
     * @param string $regularType
     * @return string
     * @throws WiseToolException
     */
    public static function regularToBootstrap(string $regularType): string
    {
        switch ($regularType) {
            case "warning":
                return "warning";
            case "info":
                return "primary";
            case "success":
                return "success";
            case "error":
                return "danger";
            default:
                throw new WiseToolException("Unknown regular type $regularType.");
                break;
        }
    }


    /**
     * Returns the wise version of the given regular notification type.
     *
     * @param string $regularType
     * @return string
     * @throws WiseToolException
     */
    public static function regularToWise(string $regularType): string
    {
        switch ($regularType) {
            case "warning":
                return "w";
            case "info":
                return "i";
            case "success":
                return "s";
            case "error":
                return "e";
            default:
                throw new WiseToolException("Unknown regular type $regularType.");
                break;
        }
    }


    /**
     * Returns the regular version of the given bootstrap notification type.
     *
     * @param string $bootstrapType
     * @return string
     * @throws WiseToolException
     */
    public static function bootstrapToRegular(string $bootstrapType): string
    {
        switch ($bootstrapType) {
            case "warning":
                return "warning";
            case "primary":
                return "info";
            case "success":
                return "success";
            case "danger":
                return "error";
            default:
                throw new WiseToolException("Unknown bootstrap type $bootstrapType.");
                break;
        }
    }

    /**
     * Returns the wise version of the given bootstrap notification type.
     *
     * @param string $bootstrapType
     * @return string
     * @throws WiseToolException
     */
    public static function bootstrapToWise(string $bootstrapType): string
    {
        switch ($bootstrapType) {
            case "warning":
                return "w";
            case "primary":
                return "i";
            case "success":
                return "s";
            case "danger":
                return "e";
            default:
                throw new WiseToolException("Unknown bootstrap type $bootstrapType.");
                break;
        }
    }


}