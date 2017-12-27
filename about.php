<?php
$f = $_GET['f'];
include_once('sys/config.php');
include($f);
?>
<div class="row">
            <div class="span2">
            </div>
            <div class="span10">
                <div id="content">
					<div class="page-header">
                        <h4>About NetSecEnv(Based on ZVulDrill)</h4>
                        <hr>
						<p>
                            <b>Testing Environment</b><br />
							<ul>
								<li>Apache 2.4.29</li>
								<li>PHP 5.6.32</li>
								<li>MariaDB 10.1.28</li>
							</ul>
							
							<b>phpinfo()</b><br />
							<ul>
								<li>allow_url_include = on</li>
								<li>allow_url_fopen = on</li>
								<li>magic_quotes_gpc = off</li>
							</ul>
							
							<b>Contact</b><br>
							<ul>
								<li>Zer0cloud</li>
								Email：710leo[at]gmail.com<br>
								<li>Harevost</li>
								Email: onlybest25[at]hotmail.com<br>
								Wechat: Harevost16<br>
								↑<br>
								A Naive student in BUPT, BUPT DUBHE, KNOWNSEC SCANV
							</ul>
                        </p>    
                    </div>
                </div>
            </div>
        </div>
<?php 
require_once('footer.php');
?>