<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Шуточная CMS</title>
<link rel='stylesheet' type='text/css' href='stylesOrder.css'>
</head>
<body>
<div class='wrapBig'>
	<div class='wrap'>
		<header class='header'>
			<div class="logo"></div>
			<div class="cart">
				<div>Your shopping cart contains 
				<?php echo count($_SESSION['cart']); ?> items.
				</div>
				<div> 
				<a href="?cart">View your cart</a>
				</div>
			</div>
			<div class='useful'>
				<div> Источники полезного:</div>
				<div>
					<a href="players/"style="color:green;">
					Players </a>
					,
					<a href="coach/">Coach </a>
					,
					<a href="nation/">Nationality </a>
					,
					<a href="authors/">Authors </a>
				</div>
			</div>
			<div class="time_work">
				<strong>Время, когда можем и поработать: </strong>
				<div>Пн.-Пт. с 9-00	до 20-00,</div>
				<div>Сб.-Вс. с 10-00 до 18-00</div>
			</div>
			<nav>
				<ul>
					<li><a href="about/">Кто мы?</a></li>
					<li><a href="feedback/">Отзывы</a></li>
					<li><a href="pay/">Оплата и доставка</a></li>
					<li><a href="faq/">Вопросы и ответы</a></li>
					<li><a href="sale/">Акции</a></li>
				</ul>

			</nav>
			<ul class="contacts">
				<li class="velcom">+375 (44) <span>513-48-80</span></li>
				<li class="mts">+375 (33) <span>602-35-79</span></li>
				<li class="life">+375 (25) <span>в разраб.</span></li>
				<li class="phone">+375 (17) <span>000-00-02</span></li>
				<li class="call links"><a class="callback" href="#">
				Заказать обратный звонок</a></li>
				<li class="skype" style="padding-left: 24px;">
				<a href="skype:" style="text-decoration:none">
				test.by</a></li>
				<li class="email" style="padding-left: 24px;"> 
				<a href="mailto:gonzjv@ya.ru">gonzjv@ya.ru</a></li>
			</ul>
		</header>
		<section class='products'>
			<ul class='catalogue'>
			<?php foreach ($cart as $item): ?>
				<li>
					<div class='pic'>
						<img src="<?php htmlout($item['picURL']); ?>"
						width='245' height='265'>
					</div>
					<div class='model'>
						<?php htmlout($item['model']); ?>
					</div>
					<div class='manufacturer'>
						<?php htmlout($item['manufacturer']); ?>
					</div>
					<div class ='price'>
						$<?php echo number_format($item['price'], 0);?>
					</div>
				    <div>
					<form action="" method="post">
						<input type="hidden" name="id" value="<?php
						htmlout($item['id']); ?>">
						<input type="submit" name="action" value="Buy">
					</form>
					</div>
				</li>
			<?php endforeach; ?>
			</ul>

		<h1>Watches in DB</h1>
		<p><a href="?add">Add new watches</a></p>
		<?php if (isset($watchesArr)): ?>
		<table>
        <tr><th>Watches</th><th>Options</th></tr>
        <?php foreach ($watchesArr as $watches): ?>

        <tr>
          <td><?php markdownout($watches['model']); ?></td>
          <td>
            <form action="?" method="post">
              <div>
                <input type="hidden" name="id" value="<?php
                    htmlout($watches['id']); ?>">
                <input type="submit" name="action" value="Edit">
                <input type="submit" name="action" value="Delete">
				<input type="submit" name="action" value="AddPic">
			  </div>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
		</table>
		<?php endif; ?>
	</div>
</div>
	
<?php include 'logout.inc.html.php'; ?>
</body>
</html>