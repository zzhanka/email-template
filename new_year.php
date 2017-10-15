<?php
$isTest = true;

if ($isTest) {
  $img1src = 'images/new_year/podarki_na_noviy_god.jpg';
  $img2src = 'images/new_year/maliy_budzhet.jpg';
  $img3src = 'images/new_year/sredniy_budzhet.jpg';
  $img4src = 'images/new_year/ekskluzivnie_podarki.jpg';
  $img5src = 'images/new_year/dostavka.png';
  $img6src = 'images/new_year/pomosh_s_maketom_obrazci.png';
  $img7src = 'images/new_year/upakovka.png';
  $img8src = 'images/new_year/sroki.png';
  $img9src = 'images/new_year/skidka.jpg';

  $img10src = 'images/new_year/kruzhka_1.jpg';
  $img11src = 'images/new_year/kruzhka_2.jpg';
  $img12src = 'images/new_year/futbolka_pz.jpg';
  
  $img13src = 'images/new_year/zhenskaya_pz.jpg';
  $img14src = 'images/new_year/svitshot_pz.jpg';
  $img15src = 'images/new_year/svitshot_uniseks.jpg';

  $img16src = 'images/new_year/obiemnie_nakleiki.jpg';
  $img17src = 'images/new_year/nabor_nakleek.jpg';
  $img18src = 'images/new_year/shokoladnie_nabori.jpg';
  $img19src = 'images/new_year/pled_1.jpg';
  $img20src = 'images/new_year/pled_2.jpg';
  $img21src = 'images/new_year/pled_3.jpg';
  $img22src = 'images/new_year/pled_4.jpg';

  $img23src = 'images/new_year/plakat.jpg';
  $img24src = 'images/new_year/kalendari.jpg';
  $img25src = 'images/new_year/chehol_1.jpg';
  $img26src = 'images/new_year/chehol_2.jpg';
  $img27src = 'images/new_year/kovrik.jpg';
  $img28src = 'images/new_year/passport.jpg';
  $img29src = 'images/new_year/eksklusivnaya_upakovka.jpg';
} else {
  $img1src = '';
  $img2src = 'url2';
}

function showText($text)
{
  echo "<font color='#505354' face='verdana, arial, sans-serif' style='font-size: 16px; line-height: 18px;'><span style='font-family: verdana, arial, sans-serif; color: #505354; font-size: 16px; line-height: 18px;'>$text</span></font>";
}

function showHeaderText($text)
{
  echo "<font color='#231f1c' face='verdana, arial, sans-serif' style='font-size: 16px; line-height: 18px;'><span style='font-family: verdana, arial, sans-serif; color: #231f1c; font-size: 16px; line-height: 18px;'>$text</span></font>";
}

function showBigText($text)
{
  echo "<font color='#505354' face='verdana, arial, sans-serif' style='font-size: 18px; line-height: 20px;'><span style='font-family: verdana, arial, sans-serif; color: #505354; font-size: 18px; line-height: 20px;'>$text</span></font>";
}

$horizontalPadding = '<td style="width:15px;max-width:15px;min-width:15px;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" width="15"></td>';

$br = '<div style="height: 5px; line-height: 5px; font-size: 7px;"></div>';
$xs_verticalPadding = '<div style="height: 9px; line-height: 9px; font-size: 7px;"></div>';
$s_verticalPadding = '<div style="height: 15px; line-height: 9px; font-size: 7px;"></div>';
$m_verticalPadding = '<div style="height: 20px; line-height: 9px; font-size: 7px;"></div>';
$l_verticalPadding = '<div style="height: 30px; line-height: 9px; font-size: 7px;"></div>';
$xl_verticalPadding = '<div style="height: 50px; line-height: 9px; font-size: 7px;"></div>';

?>

<?= $m_verticalPadding; ?>
<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td>
      <?php showHeaderText('<b>Закажите заранее, пока цены низкие и есть время на выбор</b>'); ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>
<?= $m_verticalPadding; ?>

<!-- BANNER (START) -->

<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center">
<tr>
<td>
<![endif]-->
<table class="outer" align="center">
  <tr>
    <td>
      <table class="outer" align="center">
        <tr>
          <td class="full-width-image">
            <img src="<?=$img1src;?>" alt="Подарки на новый год" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->

<!-- BANNER (END) -->

<?= $m_verticalPadding; ?>

<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center">
<tr>
<td>
<![endif]-->
<table class="outer" align="center">
  <tr>
    <td>
      <table class="outer" align="center">
        <tr>
          <?= $horizontalPadding; ?>
          <td align="left" valign="top">
            <p style="text-align: left">
              <?php
                $textToShow = 'Мы знаем, что в декабре будет ажиотаж: сроки срываться, телефоны будут гореть, а цены расти.';
                showText($textToShow);
              ?>
            </p>
            <div style="height: 20px; line-height: 20px; font-size: 7px;"></div>
            <p style="text-align: left">
              <?php
                $textToShow = 'Поэтому мы заранее решили подумать и предложить варианты новогодних подарков для ваших сотрудников и партнеров.';
                showText($textToShow);
              ?>
            </p>
          </td>
          <?= $horizontalPadding; ?>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->

<?= $l_verticalPadding; ?>

<hr/>

<?= $m_verticalPadding; ?>
<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td>
      <?php 
        $textToShow = '<span style="font-weight: bold"><b>Небольшой бюджет</b></span> (10-20 тысяч рублей или до 300 руб/чел.)';
        showText($textToShow);
      ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>
<?= $m_verticalPadding; ?>

<!-- TABLE (START) -->

      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center">
      <tr>
      <td>
      <![endif]-->
      <table class="outer" align="center">
        <tr>
          <td class="two-column">
            <!--[if (gte mso 9)|(IE)]>
            <table width="100%">
            <tr>
            <td width="50%" valign="top">
            <![endif]-->
            <div class="column_60">
              <table width="100%">
                <tr>
                  <td valign="top">
                    <div style="display: block; max-width: 372px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?=$img2src;?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 372px; max-width: 100%;" /></a></div>
                  </td>
                  <?= $horizontalPadding; ?>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column_40">
              <table width="100%">
                <tr>
                  <td align="left" valign="center">

                    <?php 
                      showText('<span class="disc">●</span> кружка');
                      echo $br;
                      showText('<span class="disc">●</span> снежинки с вашим логотипом');
                      echo $br;
                      showText('<span class="disc">●</span> плакаты и календари');
                      echo $br;
                      showText('<span class="disc">●</span> коврики для мышек');
                      echo $br;
                      showText('<span class="disc">●</span> шоколадные наборы');
                      echo $br;
                    ?>

                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->

<!-- TABLE (END) -->

<?= $m_verticalPadding; ?>
<hr/>
<?= $l_verticalPadding; ?>

<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td>
      <?php 
        $textToShow = '<span style="font-weight: bold"><b>Средний бюджет</b></span> (30-50 тысяч рублей или до 1000 руб/чел.)';
        showText($textToShow);
      ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>
<?= $m_verticalPadding; ?>

<!-- TABLE (START) -->

      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center">
      <tr>
      <td>
      <![endif]-->
      <table class="outer" align="center">
        <tr>
          <td class="two-column">
            <!--[if (gte mso 9)|(IE)]>
            <table width="100%">
            <tr>
            <td width="50%" valign="top">
            <![endif]-->
            <div class="column_60">
              <table width="100%">
                <tr>
                  <td class="inner" valign="top">
                    <div style="display: block; max-width: 372px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?=$img3src;?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 372px; max-width: 100%;" /></a></div>
                  </td>
                  <?=$horizontalPadding;?>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column_40">
              <table width="100%">
                <tr>
                  <td class="inner" align="left" valign="center">

                    <?php 
                      showText('<span class="disc">●</span> футболка / свитшот');
                      echo $br;
                      showText('<span class="disc">●</span> чехлы на телефон');
                      echo $br;
                      showText('<span class="disc">●</span> обложка для паспорта');
                      echo $br;
                      showText('<span class="disc">●</span> подушки');
                    ?>

                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->

<!-- TABLE (END) -->

<?= $m_verticalPadding; ?>
<hr/>
<?= $l_verticalPadding; ?>

<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td>
      <?php 
        $textToShow = '<span style="font-weight: bold"><b>Эксклюзивные подарки</b></span> (более 1000 руб/чел.)';
        showText($textToShow);
      ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>
<?= $m_verticalPadding; ?>

<!-- BANNER (START) -->

<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center">
<tr>
<td>
<![endif]-->
<table class="outer" align="center">
  <tr>
    <td>
      <table class="outer" align="center">
        <tr>
          <td class="full-width-image">
            <img src="<?= $img4src; ?>" alt="Эксклюзивные подарки" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->

<!-- BANNER (END) --> 

<?= $m_verticalPadding; ?>
<table class="outer" align="left">
  <tr>
    <?= $horizontalPadding; ?>
    <td>
      <?php 
        showText('<span class="disc">●</span> Уютные пледы с печатью или вышивкой вашего логотипа');
        echo $br;
        showText('<span class="disc">●</span> Холсты и картины для особых клиентов');
        echo $br;
        showText('<span class="disc">●</span> Набор из трех предметов + комплект наклеек для украшения офиса в подарок');
        echo $br;
        showText('<span class="disc">●</span> Персонализированная упаковка с вашими пожеланиями сотрудникам');
      ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>

<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center">
<tr>
<td>
<![endif]-->
<table class="outer" align="center">
  <tr>
    <td>
      <table class="outer" align="center">
        <tr>
          <td>
            <table border="0" cellpadding="0" cellspacing="0" style="border-spacing:0;font-family:sans-serif;color:#333333;" width="100%">
              <tbody>
                <tr>
                  <?= $horizontalPadding; ?>
                  <td align="center" style="padding: 0px; text-align: center;">
                    <?= $l_verticalPadding; ?>
                    <?php showHeaderText('Специально для вас будем рады сделать макеты календарей, блокнотов, ковриков для мышки и многое другое'); ?> 

                    <?= $m_verticalPadding; ?>
                    <table class="outer" align="center">
                      <tr>
                        <td align="center">
                          <!-- BUTTON (START) -->
                          <table cellpadding="0" cellspacing="0" border="0" width="250" style="width: 250px !important; max-width: 250px; min-width: 250px; background: #00cf67; border-radius: 3px;">
                            <tr>
                              <?= $horizontalPadding; ?>
                              <td align="center" valign="middle" height="62">
                               <a href="#" target="_blank" style="display: block; width: 100%; height: 62px; font-family: Verdana, Tahoma, Geneva, sans-serif; color: #ffffff; font-size: 16px; line-height: 62px; text-decoration: none; white-space: nowrap;">
                                <font face="Verdana, Tahoma, Geneva, sans-serif" color="#ffffff" style="font-size: 16px; line-height: 62px; text-decoration: none; white-space: nowrap;">
                                  <span style="font-family: Arial, Verdana, Tahoma, Geneva, sans-serif; color: #ffffff; font-size: 16px; line-height: 62px; text-decoration: none; white-space: nowrap;">ЗАКАЗАТЬ&nbsp;ПОДАРКИ&nbsp;НА&nbsp;САЙТЕ</span>
                                </font>
                               </a>
                              </td>
                              <?= $horizontalPadding; ?>
                            </tr>
                          </table>
                          <!-- BUTTON (END) -->

                        </td>
                        <?= $horizontalPadding; ?>
                      </tr>
                    </table>

                    <div style="height: 20px; line-height: 20px; font-size: 7px;"></div>

                    <?php showText('Или напишите запрос на <a href="mailto:contact@printio.ru">contact@printio.ru</a>'); ?>
                    <div style="height: 20px; line-height: 20px; font-size: 7px;"></div>

                  </td>
                  <?= $horizontalPadding; ?>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->


<?= $m_verticalPadding; ?>
<hr/>
<?= $l_verticalPadding; ?>

<?= $m_verticalPadding; ?>
<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td>
      <?php showHeaderText('<b>Кроме качественных и красивых подарков мы обещаем:</b>'); ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>
<?= $m_verticalPadding; ?>




<?php include_once('advantage.php'); ?>









<?= $m_verticalPadding; ?>
<hr/>
<?= $l_verticalPadding; ?>

<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td>
      <?php showHeaderText('<b>По-прежнему сомневаетесь?</b>'); ?>
      <?= $m_verticalPadding; ?>
      <?php showText('Вот еще 2 аргумента, чтобы заказать в октябре:'); ?>

    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>

<!-- BANNER (START) -->

<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center">
<tr>
<td>
<![endif]-->
<table class="outer" align="center">
  <tr>
    <td>
      <table class="outer" align="center">
        <tr>
          <td class="full-width-image">
            <img src="<?= $img9src; ?>" alt="Скидка" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->

<!-- BANNER (END) --> 


<?= $m_verticalPadding; ?>
<hr/>
<?= $l_verticalPadding; ?>

<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td>
      <?php showHeaderText('Вот небольшая подборка товаров для украшения<br/>вашего праздника:'); ?>

    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>


<!-- TABLE (START) -->

      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center">
      <tr>
      <td>
      <![endif]-->
      <table class="outer" align="center">
        <tr>
          <td class="two-column">
            <!--[if (gte mso 9)|(IE)]>
            <table width="100%">
            <tr>
            <td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 270px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?= $img10src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 270px; max-width: 100%;" /></a></div>
                    <?= $s_verticalPadding; ?>
                    <?php showText('белые кружки с печатью'); ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 270px;"><a href="https://printio.ru/full_print_tees/53293"><img alt="img" src="<?= $img11src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 270px; max-width: 100%;" /></a></div>
                    <?= $s_verticalPadding; ?>
                    <?php showText('кружки с цветными ручками и ободком с печатью'); ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
        <tr>
          <td class="two-column">
            <!--[if (gte mso 9)|(IE)]>
            <table width="100%">
            <tr>
            <td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 270px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?= $img12src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 270px; max-width: 100%;" /></a></div>
                    <?= $s_verticalPadding; ?>
                    <?php showText('футболка с полной запечаткой мужская'); ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 270px;"><a href="https://printio.ru/full_print_tees/53293"><img alt="img" src="<?= $img13src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 270px; max-width: 100%;" /></a></div>
                    <?= $s_verticalPadding; ?>
                    <?php showText('футболка с полной запечаткой женская'); ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
        <tr>
          <td class="two-column">
            <!--[if (gte mso 9)|(IE)]>
            <table width="100%">
            <tr>
            <td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 270px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?= $img14src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 270px; max-width: 100%;" /></a></div>
                    <?= $s_verticalPadding; ?>
                    <?php showText('свитшот с полной запечаткой'); ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 270px;"><a href="https://printio.ru/full_print_tees/53293"><img alt="img" src="<?= $img15src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 270px; max-width: 100%;" /></a></div>
                    <?= $s_verticalPadding; ?>
                    <?php showText('свитшот унисекс'); ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->

<!-- TABLE (END) -->

<?= $l_verticalPadding; ?>

<!-- BANNER (START) -->
<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center">
<tr>
<td>
<![endif]-->
<table class="outer" align="center">
  <tr>
    <td>
      <table class="outer" align="center">
        <tr>
          <td class="full-width-image">
            <img src="<?= $img16src; ?>" alt="объёмные наклейки" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
<!-- BANNER (END) --> 
<?= $m_verticalPadding; ?>
<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td class="inner" align="center">
      <?php showText('объёмные наклейки'); ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>


<?= $l_verticalPadding; ?>

<!-- BANNER (START) -->
<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center">
<tr>
<td>
<![endif]-->
<table class="outer" align="center">
  <tr>
    <td>
      <table class="outer" align="center">
        <tr>
          <td class="full-width-image">
            <img src="<?= $img17src; ?>" alt="набор новогодних наклеек" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
<!-- BANNER (END) --> 
<?= $m_verticalPadding; ?>
<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td class="inner" align="center">
      <?php showText('набор новогодних наклеек'); ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>

<?= $l_verticalPadding; ?>

<!-- BANNER (START) -->
<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center">
<tr>
<td>
<![endif]-->
<table class="outer" align="center">
  <tr>
    <td>
      <table class="outer" align="center">
        <tr>
          <td class="full-width-image">
            <img src="<?= $img18src; ?>" alt="шоколадные наборы" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
<!-- BANNER (END) --> 
<?= $m_verticalPadding; ?>
<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td class="inner" align="center">
      <?php showText('шоколадные наборы'); ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>


<?= $l_verticalPadding; ?>
<!-- TABLE (START) -->

      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center">
      <tr>
      <td>
      <![endif]-->
      <table class="outer" align="center">
        <tr>
          <td class="two-column">
            <!--[if (gte mso 9)|(IE)]>
            <table width="100%">
            <tr>
            <td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?= $img19src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/53293"><img alt="img" src="<?= $img20src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->

<!-- TABLE (END) -->
<?= $m_verticalPadding; ?>
<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td class="inner" align="center">
      <?php showText('флисовый плед с вашим логотипом'); ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>

<?= $l_verticalPadding; ?>
<!-- TABLE (START) -->

      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center">
      <tr>
      <td>
      <![endif]-->
      <table class="outer" align="center">
        <tr>
          <td class="two-column">
            <!--[if (gte mso 9)|(IE)]>
            <table width="100%">
            <tr>
            <td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?= $img21src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/53293"><img alt="img" src="<?= $img22src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->

<!-- TABLE (END) -->
<?= $m_verticalPadding; ?>
<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td class="inner" align="center">
      <?php showText('флисовый плед с новогодней тематикой'); ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>


<?= $l_verticalPadding; ?>
<!-- TABLE (START) -->

      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center">
      <tr>
      <td>
      <![endif]-->
      <table class="outer" align="center">
        <tr>
          <td class="two-column">
            <!--[if (gte mso 9)|(IE)]>
            <table width="100%">
            <tr>
            <td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?= $img23src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                    <?= $s_verticalPadding; ?>
                    <?php showText('плакаты'); ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/53293"><img alt="img" src="<?= $img24src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                    <?= $s_verticalPadding; ?>
                    <?php showText('одностраничные календари'); ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->

<!-- TABLE (END) -->



<?= $l_verticalPadding; ?>
<!-- TABLE (START) -->

      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center">
      <tr>
      <td>
      <![endif]-->
      <table class="outer" align="center">
        <tr>
          <td class="two-column">
            <!--[if (gte mso 9)|(IE)]>
            <table width="100%">
            <tr>
            <td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?= $img25src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/53293"><img alt="img" src="<?= $img26src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->

<!-- TABLE (END) -->
<?= $m_verticalPadding; ?>
<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td class="inner" align="center">
      <?php showText('чехлы для телефонов'); ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>


<?= $l_verticalPadding; ?>
<!-- TABLE (START) -->

      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center">
      <tr>
      <td>
      <![endif]-->
      <table class="outer" align="center">
        <tr>
          <td class="two-column">
            <!--[if (gte mso 9)|(IE)]>
            <table width="100%">
            <tr>
            <td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?= $img27src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                    <?= $s_verticalPadding; ?>
                    <?php showText('коврики для мышки'); ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner">
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/53293"><img alt="img" src="<?= $img28src; ?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                    <?= $s_verticalPadding; ?>
                    <?php showText('обложки для паспорта'); ?>
                  </td>
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->

<!-- TABLE (END) -->



<?= $l_verticalPadding; ?>

<!-- BANNER (START) -->
<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center">
<tr>
<td>
<![endif]-->
<table class="outer" align="center">
  <tr>
    <td>
      <table class="outer" align="center">
        <tr>
          <td class="full-width-image">
            <img src="<?= $img29src; ?>" alt="подарочная упаковка" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
<!-- BANNER (END) --> 
<?= $m_verticalPadding; ?>
<table class="outer" align="center">
  <tr>
    <?= $horizontalPadding; ?>
    <td class="inner" align="center">
      <?php showText('подарочная упаковка'); ?>
    </td>
    <?= $horizontalPadding; ?>
  </tr>
</table>
<?= $l_verticalPadding; ?>
