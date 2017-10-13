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
  echo "<span class='bla'>$text</span>";
}

?>

Закажите заранее, пока цены низкие и есть время на выбор

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

<?php
  $textToShow = 'Мы знаем, что в декабре будет ажиотаж: сроки срываться, телефоны будут гореть, а цены расти.';
  showText($textToShow);

  $textToShow = 'Поэтому мы заранее решили подумать и предложить варианты новогодних подарков для ваших сотрудников и партнеров.';
  showText($textToShow);
 ?>

<hr/>
<?php 
  $textToShow = '<span style="font-weight: bold">Небольшой бюджет</span> (10-20 тысяч рублей или до 300 руб/чел.)';
  showText($textToShow);
?>

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

                    <?php 
                      showText('<span class="disc">●</span>кружка');
                      showText('<span class="disc">●</span>снежинки с вашим логотипом');
                      showText('<span class="disc">●</span>плакаты и календари');
                      showText('<span class="disc">●</span>коврики для мышек');
                      showText('<span class="disc">●</span>шоколадные наборы'); 
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

<!-- BANNER (END) -->
