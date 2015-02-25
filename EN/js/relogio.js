function relogio(){	
	//criamos a variavel objeto momentoAtual, que contera a data atual
	var momentoAtual = new Date(); 
	
	//Pegamos em variaveis separadas, hora, minuto e segundo
    var hora = momentoAtual.getHours(); 
    var minuto = momentoAtual.getMinutes();
    var segundo = momentoAtual.getSeconds();
	
	//verificamos se segundo, minuto e hora é menor que 9 se for concatenamos adicionando um zero a esquerda
	if(segundo <=9 )
	{
	   segundo = "0"+segundo;	
	};
	if(minuto <=9 )
	{
	   minuto = "0"+minuto;	
	};
	if(hora <=9 )
	{
	   hora = "0"+hora;	
	};
	
	
	// pegamos dia, mes e ano do objeto momento atual
	var dia = momentoAtual.getDate();
	var nDia = momentoAtual.getDay();
	var mes = momentoAtual.getMonth();
	var ano = momentoAtual.getFullYear();
	var comp = null;
	
	
	// descobriremos agora o nome do dia da semana
	switch(nDia)
	{
		case 0:
		nDia = "Sunday, ";
		break;
		case 1:
		nDia = "Monday, ";
		break;
		case 2:
		nDia = "Tuesday, ";
		break;
		case 3:
		nDia = "Wednesday, ";
		break;
		case 4:
		nDia = "Thursday, ";
		break;		
		case 5:
		nDia = "Friday, ";
		break;
		case 6:
		nDia = "Saturday, ";
		break;
	}
	
	
	//descobriremos agora o nome do mês atual
	switch(mes)
	{
		case 0:
		mes = "January";
		break;
		case 1:
		mes = "February";
		break;
		case 2:
		mes = "March";
		break;
		case 3:
		mes = "April";
		break;
		case 4:
		mes = "May";
		break;
		case 5:
		mes = "June";
		break;
		case 6:
		mes = "July";
		break;
		case 7:
		mes = "August";
		break;
		case 8:
		mes = "September";
		break;
		case 9:
		mes = "October";
		break;
		case 10:
		mes = "November";
		break;
		case 11:
		mes = "December";
		break;
	}


	// descobriremos se é de manha, tarde, noite ou madrugada para poder saudar o usuário
	if(hora>=6 && hora <12)
	{
		comp='Good Morning - ';   
	}
	else if(hora>=12 && hora <18)
	{
		comp='Good Afternoon - ';   
	}
	else if(hora>=18 && hora <24)
	{
		comp='Good Night - ';   
	}
	else if(hora>=24 && hora <6)
	{
		comp='Good Dawn - ';   
	};


   // contatenamos a string do relogio
   //horaImprimivel =comp+" - "+nDia+", "+ dia + " de " + mes + " de " + ano  +" | "+ hora +":"+minuto+":"+segundo;
//    horaImprimivel ='<span class="data"><a>'+comp+nDia+'</a><span style="color:gray;"><a>'+dia+' de '+mes+' de '+ano+' - </a></span><span id="hora"><a>'+hora +":"+minuto+":"+segundo+'</a></span></span>';
    horaImprimivel ='<span class="data"><a>'+comp+nDia+'</a><span style="color:gray;"><a>'+mes+', '+dia+'th, '+ano+' - </a></span><span id="hora"><a>'+hora +"."+minuto+""+'</a></span></span>';
	
	
	//utilizando jquery exibimos na div de id relogio o relogio
    $("#relogio").html(horaImprimivel);
	
    
	//logo abaixo chamamos a função a cada um 1 segundo para reatualizar o relogio
	setTimeout("relogio()",1000)
}

// esta  é a função jquery que chama o relogio
$(function() {
	relogio();
});