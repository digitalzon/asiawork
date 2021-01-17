<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Планировка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

   <h3>Часть 1</h3>
   <code>основа сайта нужные элементы</code>
   <hr>
   <p>
   	Привет, сейчас я расскажу  в кратце, что нужно будет сделать.
   	<ol>
   		<li>a</li>
   	</ol>

   </p>
<h3>Создание таблиц</h3>
<p>Таблица Еда КБЖУ:<br>
<code># yii migrate/create create_food_table --fields="calorie:integer:notNull,protein:integer:notNull,fats:integer:notNull,carbon:integer:notNull"</code></p>
<p>Добавление столбца Категории в таблицу Еда:</p>
<code></code>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
		<td>1</td>
		<td>2</td>
	    </tr>
	</thead>
	<tbody>
		<td>toto</td>
		<td>eto</td>
	</tbody>
</table>
<a href="https://klisl.com/yii2-rbac-mini.html">klisl простой RBAC</a>
</div>
