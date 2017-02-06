<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
?>
<script type="text/javascript">
/**
* Metis - Bootstrap-Admin-Template v2.2.4
* Author : onokumus
* Copyright 2014
* Licensed under MIT (https://github.com/onokumus/Bootstrap-Admin-Template/blob/master/LICENSE.md)
*/

function IBeESNayCalendar() {
    "use strict";

    //----------- BEGIN FULLCALENDAR CODE -------------------------*/

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    var hdr = {};

    if ($(window).width() <= 767) {
        hdr = {left: 'title', center: 'month,agendaWeek,agendaDay', right: 'prev,today,next'};
    } else {
        hdr = {left: '', center: 'title', right: 'prev,today,month,agendaWeek,agendaDay,next'};
    }

    var calendar = $('#calendar').fullCalendar({
        header: hdr,
        buttonText: {
            prev: '<i class="icon-chevron-left"></i>',
            next: '<i class="icon-chevron-right"></i>'
        },
        editable: true,
        droppable: true,
        selectable: false,
        selectHelper: true,
        select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true // make the event "stick"
                        );
            }
            calendar.fullCalendar('unselect');
        },
        editable: true,
        events: [
            <?php
            $query_agenda = $ARSql->query("SELECT * FROM agenda WHERE aktif='Y'");
            while($agenda = $ARSql->mf_object($query_agenda)) { ?>
            {
                title: '<?php echo $agenda->topik;?>',
                start: new Date(<?php echo $agenda->thn.','.(abs($agenda->bln) - 1).','.abs($agenda->tgl);?>),
                className: 'label label-success'
            },
            <?php }
            $query_oncall      = $ARSql->query("SELECT * FROM jadwal_oncall WHERE aktif='Y'");
            while ($rowOC = $ARSql->mf_object($query_oncall)) {
            $bulan = abs($rowOC->bulan) - 1;
            $petugas = $ARSql->getOne('petugas_oncall','id_petugas',$rowOC->id_petugas); ?>
            {
                title: '<?php echo $petugas->nama;?>',
                start: new Date(<?php echo $rowOC->tahun.','.$bulan.','.abs($rowOC->tgl);?>),
                className: 'label label-info'
            },
            <?php } ?>
//            {
//                title: 'Click for Google',
//                start: new Date(y, m, 28),
//                end: new Date(y, m, 29),
//                url: 'http://google.com/'
//            }
        ]
    });
    /*----------- END FULLCALENDAR CODE -------------------------*/

}
</script>
