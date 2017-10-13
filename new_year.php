<?php
$isTest = true;

if ($isTest) {
  $img1src = 'images/new_year/podarki_na_noviy_god.jpg';
  $img2src = 'images/new_year/maliy_budzhet.jpg';
} else {
  $img1src = '';
  $img2src = 'url2';
}

function showText($text)
{
  echo "<font color='#666666' face='Arial, Tahoma, Geneva, sans-serif' style='font-size: 16px; line-height: 18px;'><span style='font-family: Arial, Tahoma, Geneva, sans-serif; color: #666666; font-size: 16px; line-height: 18px;'>$text</span></font>";
}

$verticalPadding = '<td style="width:15px;max-width:15px;min-width:15px;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" width="15"></td>';

$br = '<div style="height: 5px; line-height: 5px; font-size: 7px;"></div>';
$horizontalPadding = '<div style="height: 9px; line-height: 9px; font-size: 7px;"></div>';

?>


<p class="h2">Закажите заранее, пока цены низкие и есть время на выбор</p>
<div style="height: 9px; line-height: 9px; font-size: 7px;"></div>
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

<?=$horizontalPadding;?>

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
          <td align="left" valign="top">
            <p style="text-align: left">
              <?php
                $textToShow = 'Мы знаем, что в декабре будет ажиотаж: сроки срываться, телефоны будут гореть, а цены расти.';
                showText($textToShow);
              ?>
            </p>
            <p style="text-align: left">
              <?php
                $textToShow = 'Поэтому мы заранее решили подумать и предложить варианты новогодних подарков для ваших сотрудников и партнеров.';
                showText($textToShow);
              ?>
            </p>
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

<?=$horizontalPadding;?>
<hr/>
<?=$horizontalPadding;?>
<?php 
  $textToShow = '<span style="font-weight: bold"><b>Небольшой бюджет</b></span> (10-20 тысяч рублей или до 300 руб/чел.)';
  showText($textToShow);
?>
<div style="height: 9px; line-height: 9px; font-size: 7px;"></div>

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
                    <div style="display: block; max-width: 275px;"><a href="https://printio.ru/full_print_tees/55667"><img alt="img" src="<?=$img2src;?>" style="border: 0; outline: none; text-decoration: none; display: block; width: 275px; max-width: 100%;" /></a></div>
                  </td>
                  $verticalPadding
                </tr>
              </table>
            </div>
            <!--[if (gte mso 9)|(IE)]>
            </td><td width="50%" valign="top">
            <![endif]-->
            <div class="column">
              <table width="100%">
                <tr>
                  <td class="inner" align="left" valign="top">

                    <?php 
                      showText('<span class="disc">●</span> кружка</p>');
                      $br;
                      showText('<span class="disc">●</span> снежинки с вашим логотипом');
                      $br;
                      showText('<span class="disc">●</span> плакаты и календари');
                      $br;
                      showText('<span class="disc">●</span> коврики для мышек');
                      $br;
                      showText('<span class="disc">●</span> шоколадные наборы');
                      $br;
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
<div style="height: 30px; line-height: 30px; font-size: 7px;"></div>
