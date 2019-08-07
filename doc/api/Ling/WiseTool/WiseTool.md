[Back to the Ling/WiseTool api](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool.md)



The WiseTool class
================
2019-08-07 --> 2019-08-07






Introduction
============

The WiseTool class.

This is just an adaptor class.


Did you ever encounter the following notification words?

- warning
- info
- success
- error

Those are pretty standard notification types.
However, if if you've worked with bootstrap 4, you'll see that they have some notification classes, but the wording
is a little bit different:

- warning
- primary
- success
- danger

Ok.
Now let me add my own, one letter variation:

- w (warning)
- i (info)
- s (success)
- e (error)


I use those some times in some notifying tools I create.


And so we end up with those notifications which basically are the same, but they just have different names.
The goal of this class is to provide easy translation from one set to another.

The first set is called regular, the second is called bootstrap, and the third (one letter) is called wise.



Class synopsis
==============


class <span class="pl-k">WiseTool</span>  {

- Methods
    - public static [wiseToRegular](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/wiseToRegular.md)(string $wiseType) : string
    - public static [wiseToBootstrap](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/wiseToBootstrap.md)(string $wiseType) : string
    - public static [regularToBootstrap](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/regularToBootstrap.md)(string $regularType) : string
    - public static [regularToWise](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/regularToWise.md)(string $regularType) : string
    - public static [bootstrapToRegular](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/bootstrapToRegular.md)(string $bootstrapType) : string
    - public static [bootstrapToWise](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/bootstrapToWise.md)(string $bootstrapType) : string

}






Methods
==============

- [WiseTool::wiseToRegular](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/wiseToRegular.md) &ndash; Returns the regular version of the given wise notification type.
- [WiseTool::wiseToBootstrap](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/wiseToBootstrap.md) &ndash; Returns the bootstrap version of the given wise notification type.
- [WiseTool::regularToBootstrap](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/regularToBootstrap.md) &ndash; Returns the bootstrap version of the given regular notification type.
- [WiseTool::regularToWise](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/regularToWise.md) &ndash; Returns the wise version of the given regular notification type.
- [WiseTool::bootstrapToRegular](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/bootstrapToRegular.md) &ndash; Returns the regular version of the given bootstrap notification type.
- [WiseTool::bootstrapToWise](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/WiseTool/bootstrapToWise.md) &ndash; Returns the wise version of the given bootstrap notification type.





Location
=============
Ling\WiseTool\WiseTool<br>
See the source code of [Ling\WiseTool\WiseTool](https://github.com/lingtalfi/WiseTool/blob/master/WiseTool.php)



SeeAlso
==============
Previous class: [WiseToolException](https://github.com/lingtalfi/WiseTool/blob/master/doc/api/Ling/WiseTool/Exception/WiseToolException.md)<br>
