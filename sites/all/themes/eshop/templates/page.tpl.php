<?php

/**
 * @file
 * Eshop's theme implementation to display a single Drupal page.
 */
?>
<div id="site_content">
  <?php print render($page['header']); ?>
  <div id="header">
    <div id="logo_box">
      <div class="lb_60">
        <a href="/" title="На главную"><img src="/design/_uploads/content/0/2/106295_foto.png" width="380" height="61" border="0" class="logo_img"></a>
        <p class="logo_p"><a href="/" class="logo_a" title="На главную">Интернет-магазин детской одежды "Леопольд"</a></p>
      </div>
      <div class="lb_20">
        <b>Условия работы:</b><br>
        <div class="logo_text">
          <a href="/news/read/347/" class="logo_a">Доставка по Киеву</a><br>
          <a href="/news/read/346/" class="logo_a">Доставка по Украине</a><br>
          <a href="/news/read/337/" class="logo_a">Обмен и возврат</a><br>
          <a href="/news/read/330/" class="logo_a">Как сделать заказ</a><br>
        </div>
      </div>
      <div class="lb_20">
        <b>Наши контакты:</b><br>
        <div class="logo_text">
          <b>Киевстар</b> <span class="logo_text_bg">(096)-432-48-87</span><br>
          <b>Life</b> <span class="logo_text_bg">(063)-743-10-24</span><br>
          <b>MTC</b> <span class="logo_text_bg">(095)-584-02-18</span><br>
          <a class="tooltip">график работы<span class="classic">летний график:<br>понедельник - пятница, с 9 до 17 (без обеда)<br>прием заказов через сайт - ежедневно, круглосуточно</span></a>
        </div>
      </div>
    </div>

    <ul id="top_menu">
      <li><b><a href="/store_cat/13706/">Новинки</a></b></li>
      <li><b><a href="/store_cat/673/">Для малышей</a></b></li>
      <li><b><a href="/store_cat/4580/">Для мальчиков</a></b></li>
      <li><b><a href="/store_cat/4582/" class="current">Для девочек</a></b></li>
      <li><b><a href="/store_cat/22251/">Детская обувь</a></b></li>
      <li><b><a href="/store_cat/4365/">Зимние комбинезоны</a></b></li>
    </ul>
  </div>
  <!-- HEADER -->
  <?php if ($page['sidebar_first']): ?>
        <?php print render($page['sidebar_first']); ?>
  <?php endif; ?>
  <!-- SIDE BOX -->
  <div class="side_box">
    <div class="element" id="cs_side_buyer_box">
      <h2>Уголок покупателя</h2>
      <ul class="side_menu">
        <li><a href="http://leopold.ua/buyer/login/">Зайти под своим логином</a></li>
        <li><a href="http://leopold.ua/buyer/register/">Регистрация: скидки до 15%</a></li>
      </ul>
    </div>
    <div class="element_no_pd" id="cs_side_filter">
      <h2>Фильтр по размерам</h2>
      <p>

      </p><form action="/store_cat/4582/" method="post" id="user_filter_form">
        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="padding:0px 4px; mardin:0;">
          <tbody>
          <tr><td>
              <div style="float:left; display: inline; padding:0;margin:0;">
                <div class="search-block" style="vertical-align: bottom;">50&nbsp;</div>

                <div class="search-block" style="vertical-align: top;">
                  <div class="filter_range2">одежда <span id="from_text_1_0">50</span> - <span id="to_text_1_0">152</span>р</div>
                  <div id="the_goods_filter_1_0" style="width: 180px;" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a></div>
                </div>

                <div class="search-block" style="vertical-align: bottom;">&nbsp;152</div>

                <input type="hidden" id="from_1_0" name="from_1_0" value="50">
                <input type="hidden" id="to_1_0" name="to_1_0" value="152">
              </div>
            </td></tr>
          <tr><td>
              <div style="float:left; display: inline; padding:0;margin:0;">
                <div class="search-block" style="vertical-align: bottom;">18&nbsp;</div>

                <div class="search-block" style="vertical-align: top;">
                  <div class="filter_range2">обувь <span id="from_text_2_0">18</span> - <span id="to_text_2_0">35</span>р</div>
                  <div id="the_goods_filter_2_0" style="width: 180px;" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a></div>
                </div>

                <div class="search-block" style="vertical-align: bottom;">&nbsp;35</div>

                <input type="hidden" id="from_2_0" name="from_2_0" value="18">
                <input type="hidden" id="to_2_0" name="to_2_0" value="35">
              </div>
            </td></tr>
          </tbody>
        </table>
        <input type="hidden" name="set_goods_filter" value="1">
        <div align="center" style="padding-bottom:7px;"><input type="submit" value="применить фильтр" id="filters_submit_button" class="ab_button_a" style="display:none;"></div>
      </form>
      <p></p>
    </div>
    <div class="element" id="cs_side_store">
      <h2>Каталог детской одежды</h2>
      <ul class="side_menu">
        <li><a href="/store_cat/13706/">НОВИНКИ <small>(292)</small></a></li><li><a href="/store_cat/96548/">Школьная форма</a></li><li><a href="/store_cat/22251/">Детская обувь</a></li><li class="submenu"><a href="/store_cat/50179/"><small>Летняя коллекция</small></a></li><li class="submenu"><a href="/store_cat/50180/"><small>Демисезон</small></a></li><li class="submenu"><a href="/store_cat/96184/"><small>Текстильная обувь</small></a></li><li class="submenu"><a href="/store_cat/90197/"><small>Резиновые сапоги</small></a></li><li class="submenu"><a href="/store_cat/8306/"><small>Зимние дутики Demar</small></a></li><li><a href="/store_cat/673/">Малыши 0 - 24 месяца</a></li><li class="submenu"><a href="/store_cat/4577/"><small>Наборы для новорожденных</small></a></li><li class="submenu"><a href="/store_cat/1558/"><small>Белье, пижамы</small></a></li><li class="submenu"><a href="/store_cat/1046/"><small>Костюмы, наборы для малышей</small></a></li><li class="submenu"><a href="/store_cat/4578/"><small>Бодики, песочники</small></a></li><li class="submenu"><a href="/store_cat/4579/"><small>Человечки, комбинезоны</small></a></li><li class="submenu"><a href="/store_cat/1040/"><small>Платья, сарафаны, юбки</small></a></li><li class="submenu"><a href="/store_cat/1066/"><small>Кофты, жилетки, свитера</small></a></li><li class="submenu"><a href="/store_cat/89628/"><small>Ползунки, лосины, штанишки</small></a></li><li class="submenu"><a href="/store_cat/1059/"><small>Комбинезоны, джинсы, брюки</small></a></li><li class="submenu"><a href="/store_cat/89645/"><small>Футболки, шорты</small></a></li><li class="submenu"><a href="/store_cat/4581/"><small>Колготки, носочки, пинетки</small></a></li><li class="submenu"><a href="/store_cat/5138/"><small>Верхняя одежда</small></a></li><li class="submenu"><a href="/store_cat/89627/"><small>Слюнявчики, пеленки</small></a></li><li><a href="/store_cat/4580/">Мальчики от 2 лет</a></li><li class="submenu"><a href="/store_cat/4583/"><small>Кофты, регланы, гольфики</small></a></li><li class="submenu"><a href="/store_cat/1768/"><small>Брюки, джинсы, комбинезоны</small></a></li><li class="submenu"><a href="/store_cat/4584/"><small>Белье, пижамы</small></a></li><li class="submenu"><a href="/store_cat/89675/"><small>Футболки, шорты</small></a></li><li class="submenu"><a href="/store_cat/5140/"><small>Спортивные костюмы</small></a></li><li class="submenu"><a href="/store_cat/5139/"><small>Верхняя одежда на осень</small></a></li><li class="submenu"><a href="/store_cat/5141/"><small>Колготки, носочки, чешки</small></a></li><li><a href="/store_cat/4582/">Девочки от 2 лет</a></li><li class="submenu"><a href="/store_cat/5144/"><small>Детские платья</small></a></li><li class="submenu"><a href="/store_cat/5142/"><small>Кардиганы, жилетки, гольфики</small></a></li><li class="submenu"><a href="/store_cat/1760/"><small>Штаны, джинсы, комбинезоны</small></a></li><li class="submenu"><a href="/store_cat/1561/"><small>Белье, пижамы, халаты</small></a></li><li class="submenu"><a href="/store_cat/89677/"><small>Футболки, шорты, юбки</small></a></li><li class="submenu"><a href="/store_cat/4420/"><small>Спортивные костюмы</small></a></li><li class="submenu"><a href="/store_cat/4748/"><small>Верхняя одежда</small></a></li><li class="submenu"><a href="/store_cat/5143/"><small>Колготки, носочки</small></a></li><li><a href="/store_cat/4365/">Зимние комбинезоны Lenne, Skorpian, KIKO и Donilo</a></li><li><a href="/store_cat/10259/">Шапки и шарфики</a></li><li><a href="/store_cat/96408/">Аксессуары</a></li><li><a href="/store_cat/96262/">Детская безопасность</a></li><li><a href="/store_cat/33877/">РАСПРОДАЖА!</a></li>			</ul>
    </div>
    <div class="element" id="cs_side_search_art">
      <h2>Поиск по сайту</h2>
      <p></p><form action="/search/" method="post"><input type="text" name="search_art_query" value="" maxlength="32" class="priority" style="width:150px; margin-left:7px;"><input type="submit" value="найти"></form><p></p>
    </div>
  </div>
  <!-- SIDE BOX -->
  <!-- CONTENT BOX -->
  <div class="content_box">

    <div class="element">
      <h2><a href="/">Детская одежда</a> » <a href="/store_cat/4582/">Девочки от 2 лет</a></h2>
      <p></p>
    </div>

    <div class="element">
      <div style="padding:10px;">Если в вашей счастливой семье подрастает юная модница, то в данном разделе вы можете купить все необходимое, чтобы ваша принцесса с самого юного возраста приучалась красиво и можно одеваться. Для вашей девочки у нас есть все - и модные пальтишки, кофточки, костюмы, и яркие платьица, носочки, и милые пижамки.<br style="clear: both;"></div>
    </div>

    <div class="element">
      <h2><a href="/store_cat/5144/">Детские платья</a></h2>
      <ul class="side_menu"><table width="100%" cellspacing="5" cellpadding="5" border="0"><tbody><tr align="center"><td width="33%" valign="top"><a href="/goods/506907/"><div class="price_mod"><div class="price_4_big">295 грн.</div><img src="/design/_uploads/0/2/506907/_big_tumb.jpg" width="185" height="185" border="1"><br>Нежно-розовое с кружевной юбочкой платье (80, 86, 92, 98, 104, 110, 116р)</div></a></td><td width="33%" valign="top"><a href="/goods/507565/"><div class="price_mod"><div class="price_4_big">265 грн.</div><img src="/design/_uploads/0/2/507565/_big_tumb.jpg" width="185" height="185" border="1"><br>Летний полосатый сарафан для девочки (116, 128, 134, 140, 152р)</div></a></td><td width="33%" valign="top"><a href="/goods/507577/"><div class="price_mod"><div class="price_4_big">265 грн.</div><img src="/design/_uploads/0/2/507577/_big_tumb.jpg" width="185" height="185" border="1"><br>Нежное платье с кошечкой для девочки (92, 104, 110, 116р)</div></a></td></tr></tbody></table><div style="text-align:right;"><div style="display:inline-block; background:rgb(255,255,0); border-radius:10px 10px 0 0; box-shadow:0px -2px 5px #eee;"><a href="/store_cat/5144/"><img src="/design/icons/arrow_left.gif" width="9" height="7" title="другие товары раздела" border="0" style="border: none;"><em><small> смотреть все товары раздела (134 шт.)</small></em></a></div></div>			</ul>
    </div>		<div class="element">
      <h2><a href="/store_cat/5142/">Кардиганы, жилетки, гольфики</a></h2>
      <ul class="side_menu"><table width="100%" cellspacing="5" cellpadding="5" border="0"><tbody><tr align="center"><td width="33%" valign="top"><a href="/goods/482406/"><div class="price_mod"><div class="price_4_big">325 грн.</div><img src="/design/_uploads/0/2/482406/_big_tumb.jpg" width="185" height="185" border="1"><br>Нежный кардиган "Сердечко" для девочки (80, 86, 92, 116р)</div></a></td><td width="33%" valign="top"><a href="/goods/507794/"><div class="price_mod"><div class="price_4_big">375 грн.</div><img src="/design/_uploads/0/2/507794/_big_tumb.jpg" width="185" height="185" border="1"><br>Серый флисовый реглан в разноцветный горох для девочки (122-128, 134-140р)</div></a></td><td width="33%" valign="top"><a href="/goods/507804/"><div class="price_mod"><div class="price_4_big">375 грн.</div><img src="/design/_uploads/0/2/507804/_big_tumb.jpg" width="185" height="185" border="1"><br>Нежно-розовый флисовый реглан в горох для девочки (122-128, 134-140р)</div></a></td></tr></tbody></table><div style="text-align:right;"><div style="display:inline-block; background:rgb(255,255,0); border-radius:10px 10px 0 0; box-shadow:0px -2px 5px #eee;"><a href="/store_cat/5142/"><img src="/design/icons/arrow_left.gif" width="9" height="7" title="другие товары раздела" border="0" style="border: none;"><em><small> смотреть все товары раздела (109 шт.)</small></em></a></div></div>			</ul>
    </div>		<div class="element">
      <h2><a href="/store_cat/1760/">Штаны, джинсы, комбинезоны</a></h2>
      <ul class="side_menu"><table width="100%" cellspacing="5" cellpadding="5" border="0"><tbody><tr align="center"><td width="33%" valign="top"><a href="/goods/507800/"><div class="price_mod"><div class="price_4_big">275 грн.</div><img src="/design/_uploads/0/2/507800/_big_tumb.jpg" width="185" height="185" border="1"><br>Серые стрейчевые штаны (128, 134р)</div></a></td><td width="33%" valign="top"><a href="/goods/507574/"><div class="price_mod"><div class="price_4_big">225 грн.</div><img src="/design/_uploads/0/2/507574/_big_tumb.jpg" width="185" height="185" border="1"><br>Темно-синие с серым модные спортивные штаны для девочки (92, 98, 104, 116, 128, 134, 140, 152р)</div></a></td><td width="33%" valign="top"><a href="/goods/507049/"><div class="price_mod"><div class="price_4_big">245 грн.</div><img src="/design/_uploads/0/2/507049/_big_tumb.jpg" width="185" height="185" border="1"><br>Черные модные легинсы для девочки (104, 110, 116, 122, 128, 140р)</div></a></td></tr></tbody></table><div style="text-align:right;"><div style="display:inline-block; background:rgb(255,255,0); border-radius:10px 10px 0 0; box-shadow:0px -2px 5px #eee;"><a href="/store_cat/1760/"><img src="/design/icons/arrow_left.gif" width="9" height="7" title="другие товары раздела" border="0" style="border: none;"><em><small> смотреть все товары раздела (47 шт.)</small></em></a></div></div>			</ul>
    </div>		<div class="element">
      <h2><a href="/store_cat/1561/">Белье, пижамы, халаты</a></h2>
      <ul class="side_menu"><table width="100%" cellspacing="5" cellpadding="5" border="0"><tbody><tr align="center"><td width="33%" valign="top"><a href="/goods/507470/"><div class="price_mod"><div class="price_4_big">190 грн.</div><img src="/design/_uploads/0/2/507470/_big_tumb.jpg" width="185" height="185" border="1"><br>Очаровательный комплект тренировочных трусиков "Зая" для девочки (80-86, 86-92, 92-98р)</div></a></td><td width="33%" valign="top"><a href="/goods/423185/"><div class="price_mod"><div class="price_4_big">190 грн.</div><img src="/design/_uploads/0/2/423185/_big_tumb.jpg" width="185" height="185" border="1"><br>Детские трусики для приучения ребенка к горшку "Птичка" (80-86р)</div></a></td><td width="33%" valign="top"><a href="/goods/429320/"><div class="price_mod"><div class="price_4_big">190 грн.</div><img src="/design/_uploads/0/2/429320/_big_tumb.jpg" width="185" height="185" border="1"><br>Комплект "Сластена" для малышки из 2-х тренировочных трусиков (86-92, 92-98р)</div></a></td></tr></tbody></table><div style="text-align:right;"><div style="display:inline-block; background:rgb(255,255,0); border-radius:10px 10px 0 0; box-shadow:0px -2px 5px #eee;"><a href="/store_cat/1561/"><img src="/design/icons/arrow_left.gif" width="9" height="7" title="другие товары раздела" border="0" style="border: none;"><em><small> смотреть все товары раздела (83 шт.)</small></em></a></div></div>			</ul>
    </div>		<div class="element">
      <h2><a href="/store_cat/89677/">Футболки, шорты, юбки</a></h2>
      <ul class="side_menu"><table width="100%" cellspacing="5" cellpadding="5" border="0"><tbody><tr align="center"><td width="33%" valign="top"><a href="/goods/507568/"><div class="price_mod"><div class="price_4_big">275 грн.</div><img src="/design/_uploads/0/2/507568/_big_tumb.jpg" width="185" height="185" border="1"><br>Яркий летний комплект из футболочки и бридж для девочки (92, 104, 110, 116р)</div></a></td><td width="33%" valign="top"><a href="/goods/507571/"><div class="price_mod"><div class="price_4_big">275 грн.</div><img src="/design/_uploads/0/2/507571/_big_tumb.jpg" width="185" height="185" border="1"><br>Комплект из футболки и бридж "Бабочка" для девочки (92, 98, 104, 110, 116р)</div></a></td><td width="33%" valign="top"><a href="/goods/507580/"><div class="price_mod"><div class="price_4_big">275 грн.</div><img src="/design/_uploads/0/2/507580/_big_tumb.jpg" width="185" height="185" border="1"><br>Летний комплект "Розовая бабочка" для девочки (116р)</div></a></td></tr></tbody></table><div style="text-align:right;"><div style="display:inline-block; background:rgb(255,255,0); border-radius:10px 10px 0 0; box-shadow:0px -2px 5px #eee;"><a href="/store_cat/89677/"><img src="/design/icons/arrow_left.gif" width="9" height="7" title="другие товары раздела" border="0" style="border: none;"><em><small> смотреть все товары раздела (54 шт.)</small></em></a></div></div>			</ul>
    </div>		<div class="element">
      <h2><a href="/store_cat/4420/">Спортивные костюмы</a></h2>
      <ul class="side_menu"><table width="100%" cellspacing="5" cellpadding="5" border="0"><tbody><tr align="center"><td width="33%" valign="top"><a href="/goods/504417/"><div class="price_mod"><div class="price_4_big">375 грн.</div><img src="/design/_uploads/0/2/504417/_big_tumb.jpg" width="185" height="185" border="1"><br>Теплый спортивный комплект для маленькой модницы (80, 92, 98р)</div></a></td><td width="33%" valign="top"><a href="/goods/504433/"><div class="price_mod"><div class="price_4_big">385 грн.</div><img src="/design/_uploads/0/2/504433/_big_tumb.jpg" width="185" height="185" border="1"><br>Спортивный теплый комплект "Бантик" для настоящей модницы (116р)</div></a></td><td width="33%" valign="top"><a href="/goods/499959/"><div class="price_mod"><div class="price_4_big">580 грн.</div><img src="/design/_uploads/0/2/499959/_big_tumb.jpg" width="185" height="185" border="1"><br>Модный спортивный костюм для девочки (134р)</div></a></td></tr></tbody></table><div style="text-align:right;"><div style="display:inline-block; background:rgb(255,255,0); border-radius:10px 10px 0 0; box-shadow:0px -2px 5px #eee;"><a href="/store_cat/4420/"><img src="/design/icons/arrow_left.gif" width="9" height="7" title="другие товары раздела" border="0" style="border: none;"><em><small> смотреть все товары раздела (12 шт.)</small></em></a></div></div>			</ul>
    </div>		<div class="element">
      <h2><a href="/store_cat/4748/">Верхняя одежда</a></h2>
      <ul class="side_menu"><table width="100%" cellspacing="5" cellpadding="5" border="0"><tbody><tr align="center"><td width="33%" valign="top"><a href="/goods/507719/"><div class="price_mod"><div class="price_4_big">860 грн.</div><img src="/design/_uploads/0/2/507719/_big_tumb.jpg" width="185" height="185" border="1"><br>Кашемировое черное пальто впереди с кружевом для модницы (116, 122, 128р)</div></a></td><td width="33%" valign="top"><a href="/goods/505378/"><div class="price_mod"><div class="price_4_big">595 грн.</div><img src="/design/_uploads/0/2/505378/_big_tumb.jpg" width="185" height="185" border="1"><br>Красивая темно-синяя легкая ветровочка для модницы (92, 98, 104, 110, 110-116р)</div></a></td><td width="33%" valign="top"><a href="/goods/505381/"><div class="price_mod"><div class="price_4_big">595 грн.</div><img src="/design/_uploads/0/2/505381/_big_tumb.jpg" width="185" height="185" border="1"><br>Тонкая ветровка светло-пудренного цвета для девочки (92, 110, 110-116р)</div></a></td></tr></tbody></table><div style="text-align:right;"><div style="display:inline-block; background:rgb(255,255,0); border-radius:10px 10px 0 0; box-shadow:0px -2px 5px #eee;"><a href="/store_cat/4748/"><img src="/design/icons/arrow_left.gif" width="9" height="7" title="другие товары раздела" border="0" style="border: none;"><em><small> смотреть все товары раздела (22 шт.)</small></em></a></div></div>			</ul>
    </div>		<div class="element">
      <h2><a href="/store_cat/5143/">Колготки, носочки</a></h2>
      <ul class="side_menu"><table width="100%" cellspacing="5" cellpadding="5" border="0"><tbody><tr align="center"><td width="33%" valign="top"><a href="/goods/506650/"><div class="price_mod"><div class="price_4_big">29 грн.</div><img src="/design/_uploads/0/2/506650/_big_tumb.jpg" width="185" height="185" border="1"><br>Гольфы для девочки с ажурными сердечками (74-80, 80-98, 98-110, 110-122, 122-140р)</div></a></td><td width="33%" valign="top"><a href="/goods/460264/"><div class="price_mod"><div class="price_4_big">110 грн.</div><img src="/design/_uploads/0/2/460264/_big_tumb.jpg" width="185" height="185" border="1"><br>Теплые красивые чешки для дома и садика (50-152р)</div></a></td><td width="33%" valign="top"><a href="/goods/499832/"><div class="price_mod"><div class="price_4_big">21 грн.</div><img src="/design/_uploads/0/2/499832/_big_tumb.jpg" width="185" height="185" border="1"><br>Очаровательные носочки для малышки (110-122р)</div></a></td></tr></tbody></table><div style="text-align:right;"><div style="display:inline-block; background:rgb(255,255,0); border-radius:10px 10px 0 0; box-shadow:0px -2px 5px #eee;"><a href="/store_cat/5143/"><img src="/design/icons/arrow_left.gif" width="9" height="7" title="другие товары раздела" border="0" style="border: none;"><em><small> смотреть все товары раздела (109 шт.)</small></em></a></div></div>			</ul>
    </div>

  </div>
  <!-- CONTENT BOX -->
  <div class="news">
    <p>© «<a href="http://leopold.ua/">Интернет-магазин детской одежды "Леопольд"</a>» - выгодно и удобно. <a href="/contacts/">Наши контакты</a>.</p>
  </div>

</div>
