@echo off
title Program SMS Gateaway GammuSMSD
color 0a
:start
echo Run or stop service GammuSMSD
echo -----------------------------------------------------
echo Input keyword 'started' or 'stoped' service GammuSMSD
set /p key=Input keyword here.... 
IF %key%==started goto started
IF %key%==stoped goto stoped
pause>
:try
echo Invalid keyword
echo Input keyword 'started' or 'stoped' service GammuSMSD
set /p key=Input keyword here.... 
IF %key%==started goto started
IF %key%==stoped goto stoped
pause>

:status_start
echo ----------------------------------------
echo Service GammuSMSD is started
echo ----------------------------------------
echo Input 'stoped' to stop service GammuSMSD
set /p key=Input keyword here.... 
IF %key%==stoped goto stoped
pause>

:status_stop
echo ------------------------------------------
echo Service GammuSMSD is stoped
echo ------------------------------------------
echo Input 'started' to start service GammuSMSD
set /p key=Input keyword here.... 
IF %key%==started goto started
pause>


:started
START C:\Gammu\bin\gammu-smsd.exe -s -c C:\Gammu\bin\smsdrc -n GammuSMSD
msg * Service gammu telah berhasil di jalankan (Service is started)
goto status_start
pause>null
:stoped
START C:\Gammu\bin\gammu-smsd.exe -k -c C:\Gammu\bin\smsdrc -n GammuSMSD
msg * Service gammu telah berhasil di berhentikan (Service is stoped)
goto status_stop
pause>


