<?php if ($idp==0) { ?>

<div id="simplebooking-container" class="clearfix">
	<div class="kids-container">
		<div id="kidsage-hor" class="booking-form-container">
			<form id="frm" name="frm" class="sb-search-form col-14" onsubmit="return false" action="" method="post">
				<div class="first col-4 arrival-departure">
					<label id="label-checkin">Data Arrivo: </label>
					<select id="ddlArrivoGiorno" name="ddlArrivoGiorno"><option value=""></option></select>
					<select id="ddlArrivoMese" name="ddlArrivoMese"><option value=""></option></select>
					<select class="year" id="ddlArrivoAnno" name="ddlArrivoAnno"><option value=""></option></select>
					<input type="hidden" name="hdnDataArrivo" id="hdnDataArrivo" /><a id="Calendario0" href="javascript:void(0);" onclick="fPopCalendar('hdnDataArrivo');"><img height="16" alt="" src="_ext/img/ico_calendario.gif" width="16" border="0" /></a>
				</div>
				<div class="col-4 arrival-departure">
					<label id="label-checkout">Data Partenza: </label>
					<select id="ddlPartenzaGiorno" name="ddlPartenzaGiorno"><option value=""></option></select>
					<select id="ddlPartenzaMese" name="ddlPartenzaMese"><option value=""></option></select>
					<select class="year" id="ddlPartenzaAnno" name="ddlPartenzaAnno"><option value=""></option></select>
					<input type="hidden" name="hdnDataPartenza" id="hdnDataPartenza" /><a id="Calendario1" href="javascript:void(0);" onclick="fPopCalendar('hdnDataPartenza');"><img height="16" alt="" src="_ext/img/ico_calendario.gif" width="16" border="0"></a>
				</div>
				<div class="persons-rooms last col-1">
					<label id="label-numrooms">Camere: </label>
					<select id="ddlCamere" name="ddlCamere"><option value=""></option></select>
				</div>
				<div class="col-3 rooms-adults-kids">
					<div id="dvCam1" class="col-3">
						<div class="adults col-1">
							<label id="label-numadults1">Adulti: </label>
							<select id="Cam1Adulti" name="Cam1Adulti"><option value=""></option></select>
						</div>
						<div class="kids col-1">
							<label id="label-numkids1">Bambini: </label>
							<select id="Cam1Bambini" name="Cam1Bambini"><option value=""></option></select>
						</div>
						<div id="dvEta11" class="age-first col-1">
							<label id="label-kidage1">Età:</label>
							<select id="Cam1Fascia1" name="Cam1Fascia1"><option value=""></option></select>
							<div id="dvEta12" class="age">
								<select id="Cam1Fascia2" name="Cam1Fascia2"><option value=""></option></select>
							</div>
							<div id="dvEta13" class="age">
								<select id="Cam1Fascia3" name="Cam1Fascia3"><option value=""></option></select>
							</div>
							<div id="dvEta14" class="age">
								<select id="Cam1Fascia4" name="Cam1Fascia4"><option value=""></option></select>
							</div>
						</div>
					</div>
					<div id="dvCam2" class="col-3 rooms-adults-kids">
						<div id="label-roomallocation2" class="occupazione-camera">Ospiti camera #2</div>
						<div class="adults col-1">
							<label id="label-numadults2">Adulti: </label>
							<select id="Cam2Adulti" name="Cam2Adulti"><option value=""></option></select>
						</div>
						<div class="kids col-1">
							<label id="label-numkids2">Bambini: </label>
							<select id="Cam2Bambini" name="Cam2Bambini"><option value=""></option></select>
						</div>
						<div id="dvEta21" class="age-first col-1">
							<label id="label-kidage2">Età:</label>
							<select id="Cam2Fascia1" name="Cam2Fascia1"><option value=""></option></select>
							<div id="dvEta22" class="age">
								<select id="Cam2Fascia2" name="Cam2Fascia2"><option value=""></option></select>
							</div>
							<div id="dvEta23" class="age">
								<select id="Cam2Fascia3" name="Cam2Fascia3"><option value=""></option></select>
							</div>
							<div id="dvEta24" class="age">
								<select id="Cam2Fascia4" name="Cam2Fascia4"><option value=""></option></select>
							</div>
						</div>
					</div>
					<div id="dvCam3" class="col-3 rooms-adults-kids">
						<div id="label-roomallocation3" class="occupazione-camera">Ospiti camera #3</div>
						<div class="adults col-1">
							<label id="label-numadults3">Adulti: </label>
							<select id="Cam3Adulti" name="Cam3Adulti"><option value=""></option></select>
						</div>
						<div class="kids col-1">
							<label id="label-numkids3">Bambini: </label>
							<select id="Cam3Bambini" name="Cam3Bambini"><option value=""></option></select>
						</div>
						<div id="dvEta31" class="age-first col-1">
							<label id="label-kidage3">Età:</label>
							<select id="Cam3Fascia1" name="Cam3Fascia1"><option value=""></option></select>
							<div id="dvEta32" class="age">
								<select id="Cam3Fascia2" name="Cam3Fascia2"><option value=""></option></select>
							</div>
							<div id="dvEta33" class="age">
								<select id="Cam3Fascia3" name="Cam3Fascia3"><option value=""></option></select>
							</div>
							<div id="dvEta34" class="age">
								<select id="Cam3Fascia4" name="Cam23ascia4"><option value=""></option></select>
							</div>
						</div>
					</div>
					<div id="dvCam4" class="col-3 rooms-adults-kids">
						<div id="label-roomallocation4" class="occupazione-camera" style="float: none;">Ospiti camera #4</div>
						<div class="adults col-1">
							<label id="label-numadults4">Adulti: </label>
							<select id="Cam4Adulti" name="Cam4Adulti"><option value=""></option></select>
						</div>
						<div class="kids-age col-1">
								<label id="label-numkids4">Bambini: </label>
								<select id="Cam4Bambini" name="Cam4Bambini"><option value=""></option></select>
						</div>
						<div id="dvEta41" class="age-first col-1">
							<label id="label-kidage4">Età:</label>
							<select id="Cam4Fascia1" name="Cam4Fascia1"><option value=""></option></select>
							<div id="dvEta42" class="age">
								<select id="Cam4Fascia2" name="Cam4Fascia2"><option value=""></option></select>
							</div>
							<div id="dvEta43" class="age">
								<select id="Cam4Fascia3" name="Cam4Fascia3"><option value=""></option></select>
							</div>
							<div id="dvEta44" class="age">
								<select id="Cam4Fascia4" name="Cam4Fascia4"><option value=""></option></select>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 first button-search last">
					<input id="btnSearch" name="btnSearch" type="button" value="Verifica Disponibilità" class="submit" />
				</div>
			</form>
		</div>
		<div class="info clearfix">
			<div class="col-4 first promo-code">
				<label id="label-promocode">Codice promo:</label>
				<input type="text" id="code" name="code" />		
			</div>
			<div class="col-5">
				<a id="label-modcancreservation" href="javascript:OpenSimpleBooking('','DELETE');">cancella / modifica prenotazione</a>
			</div>
			<div class="col-4 sb sb-standard-hor last">
				<a href="javascript:OpenVerisignSeal();" title="Protected by Verisign - Click to verify SSL Certificate">
					<img alt="Protected by Verisgn" src="_ext/img/logo-verisign.png" width="50" height="21">
				</a>
				
				<a title="Hotel booking Engine powered by Simple Booking&trade;" href="http://www.simplebooking.it" target="_blank" >
					<img src="_ext/img/powered-sb.png" border="0" width="63" height="21" alt="Prenotazioni on line Hotel">
				</a>
			</div>
		</div>
	</div>
</div>
<?php } else { ?>



<div id="simplebooking-container" class="clearfix">
	<div class="kids-container">
		<div id="kidsage-hor" class="booking-form-container">
			<form id="frm" name="frm" class="sb-search-form col-14" onsubmit="return false" action="" method="post">
				<div class="first col-4 arrival-departure">
					<label id="label-checkin">Data Arrivo: </label>
					<select id="ddlArrivoGiorno" name="ddlArrivoGiorno"><option value=""></option></select>
					<select id="ddlArrivoMese" name="ddlArrivoMese"><option value=""></option></select>
					<select class="year" id="ddlArrivoAnno" name="ddlArrivoAnno"><option value=""></option></select>
					<input type="hidden" name="hdnDataArrivo" id="hdnDataArrivo" /><a id="Calendario0" href="javascript:void(0);" onclick="fPopCalendar('hdnDataArrivo');"><img height="16" alt="" src="../_ext/img/ico_calendario.gif" width="16" border="0" /></a>
				</div>
				<div class="col-4 arrival-departure">
					<label id="label-checkout">Data Partenza: </label>
					<select id="ddlPartenzaGiorno" name="ddlPartenzaGiorno"><option value=""></option></select>
					<select id="ddlPartenzaMese" name="ddlPartenzaMese"><option value=""></option></select>
					<select class="year" id="ddlPartenzaAnno" name="ddlPartenzaAnno"><option value=""></option></select>
					<input type="hidden" name="hdnDataPartenza" id="hdnDataPartenza" /><a id="Calendario1" href="javascript:void(0);" onclick="fPopCalendar('hdnDataPartenza');"><img height="16" alt="" src="../_ext/img/ico_calendario.gif" width="16" border="0"></a>
				</div>
				<div class="persons-rooms last col-1">
					<label id="label-numrooms">Camere: </label>
					<select id="ddlCamere" name="ddlCamere"><option value=""></option></select>
				</div>
				<div class="col-3 rooms-adults-kids">
					<div id="dvCam1" class="col-3">
						<div class="adults col-1">
							<label id="label-numadults1">Adulti: </label>
							<select id="Cam1Adulti" name="Cam1Adulti"><option value=""></option></select>
						</div>
						<div class="kids col-1">
							<label id="label-numkids1">Bambini: </label>
							<select id="Cam1Bambini" name="Cam1Bambini"><option value=""></option></select>
						</div>
						<div id="dvEta11" class="age-first col-1">
							<label id="label-kidage1">Età:</label>
							<select id="Cam1Fascia1" name="Cam1Fascia1"><option value=""></option></select>
							<div id="dvEta12" class="age">
								<select id="Cam1Fascia2" name="Cam1Fascia2"><option value=""></option></select>
							</div>
							<div id="dvEta13" class="age">
								<select id="Cam1Fascia3" name="Cam1Fascia3"><option value=""></option></select>
							</div>
							<div id="dvEta14" class="age">
								<select id="Cam1Fascia4" name="Cam1Fascia4"><option value=""></option></select>
							</div>
						</div>
					</div>
					<div id="dvCam2" class="col-3 rooms-adults-kids">
						<div id="label-roomallocation2" class="occupazione-camera">Ospiti camera #2</div>
						<div class="adults col-1">
							<label id="label-numadults2">Adulti: </label>
							<select id="Cam2Adulti" name="Cam2Adulti"><option value=""></option></select>
						</div>
						<div class="kids col-1">
							<label id="label-numkids2">Bambini: </label>
							<select id="Cam2Bambini" name="Cam2Bambini"><option value=""></option></select>
						</div>
						<div id="dvEta21" class="age-first col-1">
							<label id="label-kidage2">Età:</label>
							<select id="Cam2Fascia1" name="Cam2Fascia1"><option value=""></option></select>
							<div id="dvEta22" class="age">
								<select id="Cam2Fascia2" name="Cam2Fascia2"><option value=""></option></select>
							</div>
							<div id="dvEta23" class="age">
								<select id="Cam2Fascia3" name="Cam2Fascia3"><option value=""></option></select>
							</div>
							<div id="dvEta24" class="age">
								<select id="Cam2Fascia4" name="Cam2Fascia4"><option value=""></option></select>
							</div>
						</div>
					</div>
					<div id="dvCam3" class="col-3 rooms-adults-kids">
						<div id="label-roomallocation3" class="occupazione-camera">Ospiti camera #3</div>
						<div class="adults col-1">
							<label id="label-numadults3">Adulti: </label>
							<select id="Cam3Adulti" name="Cam3Adulti"><option value=""></option></select>
						</div>
						<div class="kids col-1">
							<label id="label-numkids3">Bambini: </label>
							<select id="Cam3Bambini" name="Cam3Bambini"><option value=""></option></select>
						</div>
						<div id="dvEta31" class="age-first col-1">
							<label id="label-kidage3">Età:</label>
							<select id="Cam3Fascia1" name="Cam3Fascia1"><option value=""></option></select>
							<div id="dvEta32" class="age">
								<select id="Cam3Fascia2" name="Cam3Fascia2"><option value=""></option></select>
							</div>
							<div id="dvEta33" class="age">
								<select id="Cam3Fascia3" name="Cam3Fascia3"><option value=""></option></select>
							</div>
							<div id="dvEta34" class="age">
								<select id="Cam3Fascia4" name="Cam23ascia4"><option value=""></option></select>
							</div>
						</div>
					</div>
					<div id="dvCam4" class="col-3 rooms-adults-kids">
						<div id="label-roomallocation4" class="occupazione-camera" style="float: none;">Ospiti camera #4</div>
						<div class="adults col-1">
							<label id="label-numadults4">Adulti: </label>
							<select id="Cam4Adulti" name="Cam4Adulti"><option value=""></option></select>
						</div>
						<div class="kids-age col-1">
								<label id="label-numkids4">Bambini: </label>
								<select id="Cam4Bambini" name="Cam4Bambini"><option value=""></option></select>
						</div>
						<div id="dvEta41" class="age-first col-1">
							<label id="label-kidage4">Età:</label>
							<select id="Cam4Fascia1" name="Cam4Fascia1"><option value=""></option></select>
							<div id="dvEta42" class="age">
								<select id="Cam4Fascia2" name="Cam4Fascia2"><option value=""></option></select>
							</div>
							<div id="dvEta43" class="age">
								<select id="Cam4Fascia3" name="Cam4Fascia3"><option value=""></option></select>
							</div>
							<div id="dvEta44" class="age">
								<select id="Cam4Fascia4" name="Cam4Fascia4"><option value=""></option></select>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 first button-search last">
					<input id="btnSearch" name="btnSearch" type="button" value="Verifica Disponibilità" class="submit" />
				</div>
			</form>
		</div>
		<div class="info clearfix">
			<div class="col-4 first promo-code">
				<label id="label-promocode">Codice promo:</label>
				<input type="text" id="code" name="code" />		
			</div>
			<div class="col-5">
				<a id="label-modcancreservation" href="javascript:OpenSimpleBooking('','DELETE');">cancella / modifica prenotazione</a>
			</div>
			<div class="col-4 sb sb-standard-hor last">
				<a href="javascript:OpenVerisignSeal();" title="Protected by Verisign - Click to verify SSL Certificate">
					<img alt="Protected by Verisgn" src="../_ext/img/logo-verisign.png" width="50" height="21">
				</a>
				
				<a title="Hotel booking Engine powered by Simple Booking&trade;" href="http://www.simplebooking.it" target="_blank" >
					<img src="../_ext/img/powered-sb.png" border="0" width="63" height="21" alt="Prenotazioni on line Hotel">
				</a>
			</div>
		</div>
	</div>
</div>


<?php } ?>