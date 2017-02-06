<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<div style="margin-top: 23px;">
    <form action="" method="post">
        <div class="form-group input-group">
            <span class="input-group-btn">
                <a id="show-search" class="btn btn-default add-on">
                    <i class="icon-search"></i>
                </a>
            </span>
            <input id="hide-search" name="keyword" type="text" placeholder="Masukan kata pencarian ..." class="form-control focus-on" />
            <span id="hide-search" class="input-group-btn">
                <button id="hide-search" class="btn btn-default" type="submit">
                    &nbsp; Search
                </button>
            </span>
        </div>
    </form>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $("#show-search").click(function(){
        $("#hide-search").slideToggle();
    });
});
</script>