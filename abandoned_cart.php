<?php
$isTest = true;

if ($isTest) {
  $img1src = 'images/hatico-2.png';
  $img2src = 'images/left-image.png';

} else {
  $img1src = '/ru/user_file?resource=images&amp;user_id=1771961&amp;name=/newverstka/hatico-2.png';
  $img2src = '/ru/user_file?resource=images&amp;user_id=1771961&amp;name=/newverstka/left-image.png';
}
?>

<?= $s_verticalPadding; ?>
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
              <img alt="Hatico" src="<?= $img1src; ?>" />
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
  <table class="outer" align="left">
    <tr>
      <?= $horizontalPadding; ?>
      <td>
        <?php showHeaderText('ЗДРАВСТВУЙТЕ!'); ?>
        <?= $s_verticalPadding; ?>
        <?php showText('Буквально вчера Вы начали оформлять заказ, но не успели завершить покупку. Выбранные товары все ещё в корзине. Их можно посмотреть здесь:'); ?>
      </td>
      <?= $horizontalPadding; ?>
    </tr>
  </table>
  <!--[if (gte mso 9)|(IE)]>
  </td>
  </tr>
  </table>
  <![endif]-->

<?= $s_verticalPadding; ?>
<table class="outer" align="left">
  <tr>
    <td align="center">
      <!-- BUTTON (START) -->
      <table cellpadding="0" cellspacing="0" border="0" width="250" style="width: 250px !important; max-width: 250px; min-width: 250px; background: #4caf50; border-radius: 3px;">
        <tr>
          <?= $horizontalPadding; ?>
          <td align="center" valign="middle" height="62">
           <a href="https://printio.ru/cart" target="_blank" style="display: block; width: 100%; height: 62px; font-family: Verdana, Tahoma, Geneva, sans-serif; color: #ffffff; font-size: 16px; line-height: 62px; text-decoration: none; white-space: nowrap;">
            <font face="Verdana, Tahoma, Geneva, sans-serif" color="#ffffff" style="font-size: 16px; line-height: 62px; text-decoration: none; white-space: nowrap;">
              <span style="font-family: Arial, Verdana, Tahoma, Geneva, sans-serif; color: #ffffff; font-size: 16px; line-height: 62px; text-decoration: none; white-space: nowrap;">ПЕРЕЙТИ&nbsp;В&nbsp;КОРЗИНУ</span>
            </font>
           </a>
          </td>
          <?= $horizontalPadding; ?>
        </tr>
      </table>
      <!-- BUTTON (END) -->

      <?= $l_verticalPadding; ?>

      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center">
      <tr>
      <td>
      <![endif]-->
      <table class="outer" align="left">
        <tr>
          <?= $horizontalPadding; ?>
          <td>
            <?php showHeaderText('ПРОБЛЕМЫ С ОФОРМЛЕНИЕМ?'; ?>
            <?= $s_verticalPadding; ?>

            <?php showText('Мы с радостью поможем с оформлением заказа – свяжитесь с нами любым удобным способом:'); ?>
            <?= $xs_verticalPadding; ?>
            <?php 
              showText('<span class="disc">●</span> онлайн-чат на сайте;');
              echo $br;
              showText('<span class="disc">●</span> почта: contact@printio.ru или');
              echo $br;
              showText('<span class="disc">●</span> телефон 8(800) 555-32-73.');
            ?>
            <?= $s_verticalPadding; ?>
            <?php showText('Гарантия счастья: больше 100 000 клиентов остались довольны покупкой на Принтио. Закажите и вы будете среди них!'); ?>
          </td>
          <?= $horizontalPadding; ?>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->

      <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center">
      <tr>
      <td>
      <![endif]-->
      <table class="outer" align="center">
        <tr>
          <td width="125px">
            <img alt="Userpic" src="<?= $img2src; ?>" />
          </td>
          <td>
            <?php showText('<i>\"Очень дружелюбный и красивый персонал!) Всем доволен, только от метро идти далеко. Но это так. Мелкие неудобства! Еще не раз воспользуюсь Вашим сервисом. Удачи!\"</i>'); ?>
          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->

    </td>
  </tr>
</table>
<?= $l_verticalPadding; ?>
