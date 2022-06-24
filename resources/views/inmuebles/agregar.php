<?Template::load("admin.header.php")?>
<ul class="breadcrumb">
  <li><a href="./<?=MOD?>"><?=MOD?></a> <span class="divider">/</span></li>
  <li><a href="./<?=MOD?>/<?=ACC?>"><?=ACC?></a> <span class="divider">/</span></li>
  <li class="active"><?=$this->params['get']['id']?></li>
</ul>
<?@Template::form()?>
<?Template::load("admin.footer.php")?>