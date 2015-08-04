function startPrice(s,n){

    var s = s;
    var n = n;

	// устанавливаем цену с учетом изначальных параметров

	k1 = 5;		// Печать 10x15
	k2 = 120;   // Рама пластик 10x15
	k3 = 0; 	// Паспарту нет
	k4 = 200; 	// Пересылка

    price = n + k1 + k2 + k3 + k4;
    $("#price"+s).html(price);


}

function size1(s,n){

    var s = s;
    var n = n;

	var param1 = $("#fSize"+s+" input:checked").val(); // Размер фотографии
		if (param1 == "10x15") {k1 = 5;}
		if (param1 == "15x20") {k1 = 15;}
		if (param1 == "20x30") {k1 = 25;}

	var param2 = $("#fBorder"+s+" input:checked").val(); // Тип рамы
		if ((param2 == "Пластик") && (k1 == 5)) {k2 = 120;}
		if ((param2 == "Пластик") && (k1 == 15)) {k2 = 150;}
		if ((param2 == "Пластик") && (k1 == 25)) {k2 = 300;}

		if ((param2 == "Дерево") && (k1 == 5)) {k2 = 200;}
		if ((param2 == "Дерево") && (k1 == 15)) {k2 = 400;}
		if ((param2 == "Дерево") && (k1 == 25)) {k2 = 600;}

	var param3 = $("#fPaspartu"+s+" input:checked").val(); // Наличие паспарту
        if ((param3 == "Есть") && (k1 == 5)) {k3 = 50;}
        if ((param3 == "Есть") && (k1 == 15)) {k3 = 100;}
        if ((param3 == "Есть") && (k1 == 25)) {k3 = 150;}

		if (param3 == "Нет") {k3 = 0;}

	k4 = 200; // Пересылка
    price = n + k1 + k2 + k3 + k4;
    $("#price"+s).html(price);

}

function size2(s,n){

    var s = s;
    var n = n;

	var param1 = $("#fSize"+s+" input:checked").val(); // Размер фотографии
		if (param1 == "10x15") {k1 = 5;}
		if (param1 == "15x20") {k1 = 15;}
		if (param1 == "20x30") {k1 = 25;}

	var param2 = $("#fBorder"+s+" input:checked").val(); // Тип рамы
		if ((param2 == "Пластик") && (k1 == 5)) {k2 = 120;}
		if ((param2 == "Пластик") && (k1 == 15)) {k2 = 150;}
		if ((param2 == "Пластик") && (k1 == 25)) {k2 = 300;}

		if ((param2 == "Дерево") && (k1 == 5)) {k2 = 200;}
		if ((param2 == "Дерево") && (k1 == 15)) {k2 = 400;}
		if ((param2 == "Дерево") && (k1 == 25)) {k2 = 600;}

	var param3 = $("#fPaspartu"+s+" input:checked").val(); // Наличие паспарту
        if ((param3 == "Есть") && (k1 == 5)) {k3 = 50;}
        if ((param3 == "Есть") && (k1 == 15)) {k3 = 100;}
        if ((param3 == "Есть") && (k1 == 25)) {k3 = 150;}

		if (param3 == "Нет") {k3 = 0;}

	k4 = 200; // Пересылка
    price = n + k1 + k2 + k3 + k4;
    $("#price"+s).html(price);

}

function size3(s,n){

    var s = s;
    var n = n;

	var param1 = $("#fSize"+s+" input:checked").val(); // Размер фотографии
		if (param1 == "10x15") {k1 = 5;}
		if (param1 == "15x20") {k1 = 15;}
		if (param1 == "20x30") {k1 = 25;}

	var param2 = $("#fBorder"+s+" input:checked").val(); // Тип рамы
		if ((param2 == "Пластик") && (k1 == 5)) {k2 = 120;}
		if ((param2 == "Пластик") && (k1 == 15)) {k2 = 150;}
		if ((param2 == "Пластик") && (k1 == 25)) {k2 = 300;}

		if ((param2 == "Дерево") && (k1 == 5)) {k2 = 200;}
		if ((param2 == "Дерево") && (k1 == 15)) {k2 = 400;}
		if ((param2 == "Дерево") && (k1 == 25)) {k2 = 600;}

	var param3 = $("#fPaspartu"+s+" input:checked").val(); // Наличие паспарту
        if ((param3 == "Есть") && (k1 == 5)) {k3 = 50;}
        if ((param3 == "Есть") && (k1 == 15)) {k3 = 100;}
        if ((param3 == "Есть") && (k1 == 25)) {k3 = 150;}

		if (param3 == "Нет") {k3 = 0;}

	k4 = 200; // Пересылка
    price = n + k1 + k2 + k3 + k4;
    $("#price"+s).html(price);

}

function border1_0(s,n) {

    var s = s;
	var n = n;

	$("#bl"+s+" > table > tbody > tr > td.b0 > img").attr({ src: 'http://p-poster.com/images/borders/b1/b1-0.jpg' });
	$("#bl"+s+" > table > tbody > tr > td.b2 > img").attr({ src: "http://p-poster.com/images/borders/b1/b1-2.jpg" });
	$("#bl"+s+" > table > tbody > tr > td.b6 > img").attr({ src: "http://p-poster.com/images/borders/b1/b1-6.jpg" });
	$("#bl"+s+" > table > tbody > tr > td.b8 > img").attr({ src: "http://p-poster.com/images/borders/b1/b1-4.jpg" });

	$("#bl"+s+" > table > tbody > tr > td.b1").css("background","url('/images/borders/b1/b1-1.jpg') repeat-x");
	$("#bl"+s+" > table > tbody > tr > td.b3").css("background","url('/images/borders/b1/b1-7.jpg') repeat-y");
	$("#bl"+s+" > table > tbody > tr > td.b5").css("background","url('/images/borders/b1/b1-3.jpg') repeat-y");
	$("#bl"+s+" > table > tbody > tr > td.b7").css("background","url('/images/borders/b1/b1-5.jpg') repeat-x");

	var param1 = $("#fSize"+s+" input:checked").val(); // Размер фотографии
		if (param1 == "10x15") {k1 = 5;}
		if (param1 == "15x20") {k1 = 15;}
		if (param1 == "20x30") {k1 = 25;}

	var param2 = $("#fBorder"+s+" input:checked").val(); // Тип рамы
		if ((param2 == "Пластик") && (k1 == 5)) {k2 = 120;}
		if ((param2 == "Пластик") && (k1 == 15)) {k2 = 150;}
		if ((param2 == "Пластик") && (k1 == 25)) {k2 = 300;}

		if ((param2 == "Дерево") && (k1 == 5)) {k2 = 200;}
		if ((param2 == "Дерево") && (k1 == 15)) {k2 = 400;}
		if ((param2 == "Дерево") && (k1 == 25)) {k2 = 600;}

	var param3 = $("#fPaspartu"+s+" input:checked").val(); // Наличие паспарту
        if ((param3 == "Есть") && (k1 == 5)) {k3 = 50;}
        if ((param3 == "Есть") && (k1 == 15)) {k3 = 100;}
        if ((param3 == "Есть") && (k1 == 25)) {k3 = 150;}

		if (param3 == "Нет") {k3 = 0;}

	k4 = 200; // Пересылка
    price = n + k1 + k2 + k3 + k4;
    $("#price"+s).html(price);

}

function border1_1(s,n) {

    var s = s;
    var n = n;

	$("#bl"+s+" > table > tbody > tr > td.b0 > img").attr({ src: "http://p-poster.com/images/borders/b2/b2-0.jpg" });
	$("#bl"+s+" > table > tbody > tr > td.b2 > img").attr({ src: "http://p-poster.com/images/borders/b2/b2-2.jpg" });
	$("#bl"+s+" > table > tbody > tr > td.b6 > img").attr({ src: "http://p-poster.com/images/borders/b2/b2-6.jpg" });
	$("#bl"+s+" > table > tbody > tr > td.b8 > img").attr({ src: "http://p-poster.com/images/borders/b2/b2-4.jpg" });

	$("#bl"+s+" > table > tbody > tr > td.b1").css("background","url('/images/borders/b2/b2-1.jpg') repeat-x");
	$("#bl"+s+" > table > tbody > tr > td.b3").css("background","url('/images/borders/b2/b2-7.jpg') repeat-y");
	$("#bl"+s+" > table > tbody > tr > td.b5").css("background","url('/images/borders/b2/b2-3.jpg') repeat-y");
	$("#bl"+s+" > table > tbody > tr > td.b7").css("background","url('/images/borders/b2/b2-5.jpg') repeat-x");

	var param1 = $("#fSize"+s+" input:checked").val(); // Размер фотографии
		if (param1 == "10x15") {k1 = 5;}
		if (param1 == "15x20") {k1 = 15;}
		if (param1 == "20x30") {k1 = 25;}

	var param2 = $("#fBorder"+s+" input:checked").val(); // Тип рамы
		if ((param2 == "Пластик") && (k1 == 5)) {k2 = 120;}
		if ((param2 == "Пластик") && (k1 == 15)) {k2 = 150;}
		if ((param2 == "Пластик") && (k1 == 25)) {k2 = 300;}

		if ((param2 == "Дерево") && (k1 == 5)) {k2 = 200;}
		if ((param2 == "Дерево") && (k1 == 15)) {k2 = 400;}
		if ((param2 == "Дерево") && (k1 == 25)) {k2 = 600;}

	var param3 = $("#fPaspartu"+s+" input:checked").val(); // Наличие паспарту
        if ((param3 == "Есть") && (k1 == 5)) {k3 = 50;}
        if ((param3 == "Есть") && (k1 == 15)) {k3 = 100;}
        if ((param3 == "Есть") && (k1 == 25)) {k3 = 150;}

		if (param3 == "Нет") {k3 = 0;}

	k4 = 200; // Пересылка
    price = n + k1 + k2 + k3 + k4;
    $("#price"+s).html(price);

}

function radioY(s,n){

    var s = s;
    var n = n;

	$("#paspartu"+s).css("margin","25px");

	var param1 = $("#fSize"+s+" input:checked").val(); // Размер фотографии
		if (param1 == "10x15") {k1 = 5;}
		if (param1 == "15x20") {k1 = 15;}
		if (param1 == "20x30") {k1 = 25;}

	var param2 = $("#fBorder"+s+" input:checked").val(); // Тип рамы
		if ((param2 == "Пластик") && (k1 == 5)) {k2 = 120;}
		if ((param2 == "Пластик") && (k1 == 15)) {k2 = 150;}
		if ((param2 == "Пластик") && (k1 == 25)) {k2 = 300;}

		if ((param2 == "Дерево") && (k1 == 5)) {k2 = 200;}
		if ((param2 == "Дерево") && (k1 == 15)) {k2 = 400;}
		if ((param2 == "Дерево") && (k1 == 25)) {k2 = 600;}

	var param3 = $("#fPaspartu"+s+" input:checked").val(); // Наличие паспарту
        if ((param3 == "Есть") && (k1 == 5)) {k3 = 50;}
        if ((param3 == "Есть") && (k1 == 15)) {k3 = 100;}
        if ((param3 == "Есть") && (k1 == 25)) {k3 = 150;}

		if (param3 == "Нет") {k3 = 0;}

   	k4 = 200; // Пересылка
    price = n + k1 + k2 + k3 + k4;
    $("#price"+s).html(price);

}

function radioN(s,n){
    var s = s;
    var n = n;

	$("#paspartu"+s).css("margin","0px");

	var param1 = $("#fSize"+s+" input:checked").val(); // Размер фотографии
		if (param1 == "10x15") {k1 = 5;}
		if (param1 == "15x20") {k1 = 15;}
		if (param1 == "20x30") {k1 = 25;}

	var param2 = $("#fBorder"+s+" input:checked").val(); // Тип рамы
		if ((param2 == "Пластик") && (k1 == 5)) {k2 = 120;}
		if ((param2 == "Пластик") && (k1 == 15)) {k2 = 150;}
		if ((param2 == "Пластик") && (k1 == 25)) {k2 = 300;}

		if ((param2 == "Дерево") && (k1 == 5)) {k2 = 200;}
		if ((param2 == "Дерево") && (k1 == 15)) {k2 = 400;}
		if ((param2 == "Дерево") && (k1 == 25)) {k2 = 600;}

	var param3 = $("#fPaspartu"+s+" input:checked").val(); // Наличие паспарту
        if ((param3 == "Есть") && (k1 == 5)) {k3 = 50;}
        if ((param3 == "Есть") && (k1 == 15)) {k3 = 100;}
        if ((param3 == "Есть") && (k1 == 25)) {k3 = 150;}

		if (param3 == "Нет") {k3 = 0;}

	k4 = 200; // Пересылка
    price = n + k1 + k2 + k3 + k4;
    $("#price"+s).html(price);
}