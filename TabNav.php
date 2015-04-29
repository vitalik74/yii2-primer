<?php
/**
 * Class TabNav
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 29.04.2015 8:59
 */

namespace vitalik74\primer;

/*<div class="tabnav">
  <nav class="tabnav-tabs">
    <a href="#" class="tabnav-tab selected">Foo tab</a>
    <a href="#" class="tabnav-tab">Bar tab</a>
  </nav>
</div>

<div class="tabnav">
  <a class="btn btn-sm right" href="#">Button</a>
  <nav class="tabnav-tabs">
    <a href="#" class="tabnav-tab selected">Foo Tab</a>
    <a href="#" class="tabnav-tab">Bar Tab</a>
  </nav>
</div>


<div class="tabnav">
  <div class="tabnav-extra right">
    Tabnav widget text here.
  </div>
  <nav class="tabnav-tabs">
    <a href="#" class="tabnav-tab selected">Foo Tab</a>
    <a href="#" class="tabnav-tab">Bar Tab</a>
  </nav>
</div>

<div class="tabnav">
  <div class="right">
    <a class="tabnav-extra" href="#">
      Tabnav extra link
    </a>
    <a class="tabnav-extra" href="#">
      Tabnav extra link
    </a>
  </div>
  <nav class="tabnav-tabs">
    <a href="#" class="tabnav-tab selected">Foo Tab</a>
    <a href="#" class="tabnav-tab">Bar Tab</a>
  </nav>
</div>

*/


/**
 * Class TabNav
 *
 * ```php
 * use yii\bootstrap\NavBar;
 * use yii\widgets\Menu;
 *
 * NavBar::begin(['brandLabel' => 'NavBar Test']);
 * echo Nav::widget([
 *     'items' => [
 *         ['label' => 'Home', 'url' => ['/site/index']],
 *         ['label' => 'About', 'url' => ['/site/about']],
 *     ],
 * ]);
 * NavBar::end();
 * ```
 *
 * @see http://primercss.io/nav/#tabnav
 */
class TabNav extends \yii\bootstrap\NavBar
{

}