

$(function(){
	$("body").on("click",".arti",function(){ //eğer classı arti olana tıklanırsa
		var i=$(".eksi").size();//sayfadaki eksi clasına sahip objelerinsayısını al
		if(i<5){//eğer eksi sayısı 5 ten az ise
			$(".iler").append('<div class="i_ana">	<input type="file" name="resim[]" /> 	<div class="eksi">-</div>	</div>');
			//sayfaya bir tane daha file koy
		}
	});
	$("body").on("click",".eksi",function(){//eksiye tıklanırsa
		var index=$(this).index(".eksi");//o anki tıklanan eksiyi seçiyoruz
		var i=$(".eksi").size();//eksi sayısını alıyoruz.
		if(i>1){//eğer 1 den çok eksi var ise
			$(".i_ana:eq("+index+")").remove();//tıklanan eksinin içindeki file elemanını siliyoruz.
		 }
	});
	$("#yukle").submit(function(){//eğer form gönderilirse.
		$("#i[name=sonuc]").html(' <img style="display:block;width:50px;height:50px;margin:auto;" src="loading.gif" alt="loading" /> ').show();
		//loading gifini göster
		$("#iframe").load(function(){//eğer iframe yüklendiyse
			var veri=$(this).contents().find("body").html();//iframenin içeriğini al
			$("#i[name=sonuc]").html(veri);//sonuşları ekrana bas
			$(".iler").html('<div class="i_ana">	<input type="file" name="resim[]" /> 	<div class="eksi">-</div>	</div>');
			//ve sayfadaki fileleri silip yerin 1 tane yeni file koy

		})
	});
});
