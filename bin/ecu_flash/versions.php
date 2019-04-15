<br><h3>2013-01-09: Version 1.44.3721 released</b></h3>
<h4>Changes since 1.44.3719 version:</h4>
<h4>EcuFlash</h4>
<p>--- features --</p>
<ul>
<li>Update checker now looks at build numbers to notify you of incremental improvements that don't have a new minor version change</li>
</ul>
<p>--- bug fixes ---</p>
<ul>
<li>Fix bug where patches and some other metadata was not appearing in metadata view</li>
</ul>
<br>
<br><h3>2012-12-28: Version 1.44.3719 released</b></h3>
<br>
<h4>EcuFlash</h4>
<p>--- features --</p>
<ul>
<li>Large number of definitions have been cleaned up and added (we recommend you use the default rommetadata folder settings)</li>
<li>Make category expansion on file open an option</li>
<li>Make MRU file list size adjustable</li>
<li>Apply 12V Vpp to 2004-2007 DBW Subarus, in case some models check for this</li>
<li>Definition XMLs errors are better identified</li>
<li>Definition metatdata has a notes field that displays in the log window when loading a ROM</li>
<li>Add option to show invalid leaf node tables for definition developers</li>
<li>Help prevent laptop from going to sleep during reflash</li>
<li>Switch to Qwt 6.0</li>
<li>Add Generic3072k and Generic4096k memory models</li>
<li>Added detail to read template selection</li>
<li>Added upload capability for unknown ROMs</li>
<li>Added display of VIN and CVN informationAdd additional checksumming for Mitsubishi M32R ROMs</li>
<li>Added patching module for Mitsubish CAN parameter logging</li>
<li>Added compare feature to compare any 2 ROMs that use the same table names - highlights changes in map tree and cells within maps</li>
<li>Added warning when checksumming is turned off in Subaru ROMs</li>
<li>Added scroll bars to maps that are too large to fit the screen</li>
<li>Support for flashing 512k and 768k M32R Mitsubishi processors (e.g. Colt)</li>
<li>Add H8 checksum module for editing of Evo 7/8/9 ACD ROMs</li>
<li>Add Mitsu CAN RAM parameter logging patch</li>
<li>Add support for Evo ACD reflashing</li>
<li>Show recovery mode in status bar</li>
<li>Add detection of Windows 7</li>
<li>EcuFlash.exe now has signing a proper version info</li>
<li>Add patching engine</li>
<li>Allow copy (not paste) of static values</li>
</ul>
<p>--- bug fixes ---</p>
<ul>
<li>Fix size of Generic3072k and Generic4096k memory models</li>
<li>Fix scaling color for NaN cases</li>
<li>Fix shbootmode progress bar</li>
<li>Improve table validation in reading of definitions</li>
<li>Fix document removal bug</li>
<li>Fix bug in checksum adjustment location that could be outside flashable area in the case of 768k Colt ECU</li>
<li>Fix bug where shbootmode FTDI devices were not enabled</li>
<li>Fix bug where OP1.3 (or other FTDI serial devices) had priority over OP2</li>
<li>Fix H8539FA kernel to flash reliably!</li>
<li>Fix table fix table cut paste to not lose precision on large uint32s</li>
<li>Make parsing of user input of 0xXXXX values unsigned to allow full 32 bit numbers</li>
<li>In SH boot mode, use actual multiplier values when calculating bit rate (newer 7058S have 8x mult instead of 4x)</li>
</ul>
<h4>J2534 DLL</h4>
<p>--- features ---</p>
<ul>
<li>Contains newest firmware for OP2 (see below for details)</li>
<li>Add J2534 extension to support variable number of stop bits in serial communications</li>
<li>DLL is now signed and has correct version info</li>
<li>Added ability to add phase offset to periodic messages to control the relative timing of multiple periodic messages</li>
<li>DLL now use OP2 driver for improved performance and reliability (see below for details)</li>
<li>Add device instances ioctl</li>
<li>Add 29-bit CAN / ISO15765 support</li>
<li>Add 5-byte extended ID CAN / ISO15765 support</li>
<li>Add SNIFF_MODE support</li>
<li>Add C++ code samples</li>
</ul>
<p>--- bug fixes ---</p>
<ul>
<li>Fix bug in PassThruReadMsgs where fix use of incorrect variable in determining the actual number of messages read affected the result returned</li>
<li>Change ERR_INVALID_DEVICE_ID to 0x1A as it should be</li>
<li>Fix error in parsing of messages when using CAN_MIXED_MODE</li>
<li>Up NUM_PT_CHANNELS to 9 to support innovate</li>
</ul>
<h4>Driver</h4>
<p>--- features ---</p>
<ul>
<li>Driver synchronizes OP2 to system clock to allow log files to have correct time / date if OP2 remains plugged into the car</li>
<li>IMPORTANT - the OP2 now uses a custom driver I wrote for better speed  and stability than the Microsoft usbser.sys driver. This allows for  reduced latency and a cleaner installation as well. *** This means that  initially you must do a full EcuFlash and J2534 / driver install so that  all of these components will work together. OLDER ECUFLASH AND  OP20PT32.DLL VERSIONS WILL NOT WORK WITH THE DRIVER. **</li>
</ul>
<p>--- bug fixes ---</p>
<ul>
<li>Use exclusive file access to prevent multiple connections to the driver</li>
<li>Add USB data disposal when no file is opened</li>
</ul>
<h4>Firmware</h4>
<p>-- new features --</p>
<ul>
<li>Add logging support for Zeitronix ZT2/ZT3 devices (see samples)</li>
<li>Add support for clock synchornization with dirver in order to have accurate file time / date</li>
<li>Add support for 32bit ints with no scaling to avoid loss in precision in that case (before, everything was promoted to a float32). This feature only happens if there is no scaling done to the value</li>
<li>Add finer granularity to "friendly" logging intervals</li>
<li>Add ability to tweak OBD CAN and MRMACAN logging timing using calcsampinterval and calcconstantdelay parameters</li>
<li>Add support for mode $01,$22, and $23 OBD CAN logging</li>
<li>Add support for logging from AEM UEGO and any other devices which output ASCII streams of data (see logging examples)</li>
<li>Add J2534 extension to support variable number of stop bits in serial communications </li>
<li>Add support for LM-1, in both headerless and V2 header configurations (see logging examples)</li>
<li>Add support for logging signed parameters using issignedint=1</li>
<li>Add support for 50kbps CAN</li>
<li>Up to 60 parameters allowed</li>
<li>Completely  changed innovate MTS bus logging to support multiple LC-1 and other MTS  devices (see subaru k-line adc lc1.txt sample for details)</li>
<li>Support  for more flexible lower speed/priority parameter sampling through the  use of a new additional parameter feature called sampgroup.</li>
</ul>
<p style="padding-left: 60px;">sampgroups  are numbered 1 through 15, the number simply being a label. All  parameters in the same sampgroup will share a single timeslot. The OP2  will determine how many of each sampgroup there are, build a cycle of  that size, and phase each of them properly. This allows you to have  different groups of low speed parameters, running at different speeds,  each optimally using the sample cycle. (see subaru k-line adc lc1.txt  sample for details)<br /><br />priority = 2 is still allowed, but all it  does is assigned the parameter to sampgroup = 1</p>
<ul>
<li>SD card uses  DMA for greater speed in all cases</li>
<li>SD card multiblock read / write  to increase speed when connected to USB (800kB/s read / 500kB/s write is  typical)</li>
<li>Filesystem operations queued to a separate thread to  allow seamless logging regardless of SD card latency</li>
<li>Multibyte  parameter (up to 32-bit) mitsubishi support</li>
<li>Support for zeroing  sample count each time a new file is started using zerosamplecount = 1</li>
<li>Support for zeroing time count each time a new file is started using  zerotimecount = 1</li>
<li>Time count starts on nice intervals</li>
<li>Time  only shows to the millisecond</li>
<li>Increased range and fine-granulatrity  of possible logging intervals</li>
<li>Improved details in logcfg.out dumps</li>
<li>Support for filling in missing samples if ECU misses a response or two  using fillmissingsamples = 1</li>
<li>Support for new file cuttting action  "newfile" which starts a new file if your conditions are met (see subaru  k-line adc lc1.txt sample for details)</li>
<li>Improved timing estimates  for most logging protocols</li>
<li>Up to 4 logging channels allowed (e.g. ssmcan, lc-1, adc, &amp;  calculated data)</li>
<li>Support for fast RAM parameters on Subaru CAN  vehicles (assuming ROM patch has been made). just use the known RAM  parameter ID (0xFFxxxx) and the OP2 will do the rest. reading of  multibyte RAM parameters is sped up by the ROM patch which allow reading  up to 4 bytes with a specially encoded 3-byte parameter request. due to  current Subaru output buffer limitations, only 80 bytes can be returned  in a single request, so only 20 4-byte params can be read at a time. i  will make some changes to the OP2 firmware in the future to issue  multiple requests to overcome this 80-byte of data limit. </li>
<li>New  "previous value" parameter added to RPN expressions (e.g. "#RPM" instead  of "RPM"). this is useful in creating trigger conditions that are  sensitive to the direction of change in a value. for example, if you  wanted to capture each dyno pull from 2000rpm to 7000rpm to a separate  file, you could set the following conditions:</li>
</ul>
<p style="padding-left: 60px;">conditionrpn =  #RPM,2000,&lt;,RPM,2000,&gt;=,&amp;&amp;<br />action = start<br /><br />conditionrpn  = #RPM,7000,&lt;,RPM,7000,&gt;=,&amp;&amp;<br />action = stop</p>
<ul>
<li>Writing of logcfg.out has been speed up 100x or more - there is little  need to use the debug=noout option anymore</li>
<li>Added some more finely  spaced "friendly" logging intervals</li>
<li>Time now  starts at 1/1/2009 each time the OP2 boots to give more reasonable  looking file times</li>
<li>Green status light now blinks during 5 baud  inits (e.g. MUTII)</li>
<li>Parameters and  triggers now use RPN based scalings so that you can do arbitrary  equations or evaluations. i will add an infix (algebraic/parenthetical)  to RPN parser later for those who are confused by RPN...</li>
<li>Calculated / derived parameters are now supported - you can now make new  parameters based on equations of other parameters</li>
<li>MUTII logging is  now much more robust - it will re-initialize if there is a break in  communications</li>
<li>CAN (SSM/MRMACAN) logging is more robust  - it will  retry if there is a break in communications</li>
<li>SSM K-line logging is  more robust  - it will retry if there is a break in communications (it  used to be this way before, but I had broke it with the priority  logging)</li>
<li>Added the ability to set voltages or ground pins - this is  handy for MUTII users who need to ground pin 1</li>
<li>Added isvisible  option to parameters so that you can use them for triggering or  calculations, but not write them to the log file</li>
<li>isfloat=1  parameters automatically default to databits=32 now</li>
</ul>
<p>-- logging bug fixes --</p>
<ul>
<li>Fix bug causing Innovate MTS to log at 9600 baud</li>
<li>Fix offset error in Mode $22 OBD logging</li>
<li>Fix bug writing more than 512 bytes at a time to file queue</li>
<li>Increase size of parameter header line buffer to accommodate long parameter names</li>
<li>Fix error in  &amp;&amp; and || tokens</li>
<li>Increase speed of SSM K-line comms</li>
<li>Fix occasional failed transition to logging after USB disconnect</li>
<li>Fix overly-rapid mitsubishi communication attempts if ECU not responding</li>
<li>Collecting lc-1 data does not cause additional steps in the sample  countfix bug where logging could sometimes start immediately after a  firmware reflash without they normal delay to check for USB</li>
<li>Fix bug  where long SSM responses were not correctly parsed</li>
<li>Fix bug where  32 bit data fields (such as floats) were not masked correctly</li>
<li>Increased mrmacan logging interval estimates to avoid sampling overruns* logging mode now starts if the OP2 is already plugged into OBD and you  remove the USB connection - this means you don't have to unplug the OP2  from OBD at all between logging / reading logs / tuning / flashing /  etc.</li>
<li>Databits values over 31 could be truncated</li>
<li>Sample time is  now in units of seconds</li>
<li>Sample number now should increment by 1  per log cycle for mitsubishis</li>
<li>Fix innovate baud rate bug</li>
</ul>
<p>-- other bug fixes --</p>
<ul>
<li>Fixed ISO15765 bug where long messages weren't dealing with CAN packets with lengths other than 8 bytes</li>
<li>Fixed cleanup of filters and periodic messages when using the CAN / ISO15765 / mixed mode channedls</li>
<li>Fixed data loss race condition in ring buffering</li>
<li>Fix rare but critical communications buffer bug that could cause data transposition</li>
<li>Corrected misuse of BS and STMIN in some cases</li>
<li>Fixed flow control bug in ISO15765</li>
</ul>
<!--  -->