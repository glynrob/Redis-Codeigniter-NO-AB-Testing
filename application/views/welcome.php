<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 10px 0;
		padding: 14px 15px 0px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	p{
		margin-left:16px;
	}
	.buttons{
		margin-top:20px;
	}
	.buttons a{
		padding: 20px 40px;
		font-size:16px;
		background-color:#666666;
		margin:10px;
		color:#FFFFFF;
		font-weight:600;
		text-decoration:none;
	}
	.buttons a.orange_css{
		background-color:#FF9900;
	}
	.buttons a.green_css{
		background-color:#006633;
	}
	.buttons a.white_css{
		background-color:#FFFFFF;
		color:#333333;
	}
	
	</style>
</head>
<body>

<div id="container">
	<h1>Redis example</h1>

	<div id="body">
    	<p><a href="/welcome/reset_db">Reset Results</a></p>
         <p>Either click the button as a success or click next to jump to next instance</p>
		<?php if(isset($fields)):?>
             <table border="1">
             	<tr>
                	<td colspan="3"><strong>Orange</strong></td>
                	<td colspan="3"><strong>Green</strong></td>
                	<td colspan="3"><strong>White</strong></td>
                </tr>
             	<tr>
                	<td>Clicks</td>
                	<td>Shows</td>
                	<td>Success</td>
                	<td>Clicks</td>
                	<td>Shows</td>
                	<td>Success</td>
                	<td>Clicks</td>
                	<td>Shows</td>
                	<td>Success</td>
                </tr>
             	<tr>
                	<td><?php echo ($fields['orange_click']);?></td>
                	<td><?php echo ($fields['orange_show']);?></td>
                	<td><?php echo (number_format($fields['orange_click']/$fields['orange_show']*100,2));?>%</td>
                	<td><?php echo ($fields['green_click']);?></td>
                	<td><?php echo ($fields['green_show']);?></td>
                	<td><?php echo (number_format($fields['green_click']/$fields['green_show']*100,2));?>%</td>
                	<td><?php echo ($fields['white_click']);?></td>
                	<td><?php echo ($fields['white_show']);?></td>
                	<td><?php echo (number_format($fields['white_click']/$fields['white_show']*100,2));?>%</td>
                </tr>
             </table>
             <p><strong>Method:</strong> <?php echo ($method);?></p>
             <h4>Do you like this button</h4>
             <p class="buttons"><a href="/welcome/set/<?php echo ($method_val);?>" class="<?php echo ($method_val);?>_css">YES</a> <a href="/welcome/skip">Skip</a></p>
			<?php else:?>
				<p>No Fields exist.</p>				 
			<?php endif;
		 ?>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>