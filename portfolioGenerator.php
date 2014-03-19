<?php

	$imagesArray = [
		"acmun.png",
		"arcoiris.gif" ,
		"candyworld.png",
		"cashbin.png",
		"cometa.gif",
		"dr-chatroom.jpg",
		"envry.png",
		"gavii.png",
		"kindleshop.png",
		"surveybucks.png",
		"toaster-wars-award.png",
		"vpass.png",
		"web-based-editor.png"
	];;

	$thumbnailArray = [
		"acmun-th.png",
		"arcoiris-th.png",
		"candyworld-th.png",
		"cashbin-th.png",
		"cometa-th.png",
		"dr-chatroom-th.jpg",
		"envry-th.png",
		"gavii-th.png",
		"kindleshop-th.png",
		"surveybucks-th.png",
		"toaster-wars-award-th.png",
		"vpass-th.png",
		"web-based-editor-th.jpg",
	];

	$descriptionArray = [
		"ACMUN is the Aitchison College Model United Nations. I developed the back-end and a few pieces of the front-end of the ACMUN official website, preparing for the upcoming Executive Board of the ACMUN V Conference.",
		"This is a very innovative e-commerce concept. It includes several pieces of a fully functional suite for the control and management of a web-commerce. These features include a web-based Point-Of-Sale system, an automated Low-Stocks alert system, an Overview system, and finally an order management system. There features are streamlined for efficiency and excellent situational awareness, such that the manager can allocate his energy towards decision making while the system takes care of the rest, dysplaying critical information where needed, what you need when you need it.",
		"I designed this as an e-commerce website for the Mexican wholesale candy business \"Dulceria Arcoiris\". It features elegant and simple front-end design, dynamically created from a MySQL database inventory system, and an admin panel for every inventory management task as well as for customer support and order management.",
		"Cashbin is a very User-Friendly Pay-Per-Download website with a high payment rate at up to $12 per download. I designed the user interface to fit the specification requirements outlayed upon the project. <p><a href='http://Cashbin.net' target=\"_blank\">Cashbin.net</a></p>",
		"This project is an innovative concept used as a part of a suite of web-based software for transaction management as well as large-scale in-out inventory management system. It incorporates a clean and intuitive design, and each table shows critical and practical information, thus allowing a manager to use less brain power trying to figure things out and focus on decision making.",
		"I worked on the back-end of this drr-like chatroom application, adding full-on AJAX functionality on a completely dynamic page, decreasing server load by 50%. I also overhauled several features into AJAX enabled features, such as the admin panel and the ban issuing system",
		"Envry features a beautiful and elegant design that is at the same time minimalistic and simple. I put effort on achieving an unparalleled level of aesthetics, especially in blending a blurr-able navigation bar with beautiful photography. Visit the website: <a href=\"http://envry.com\" target=\"_blank\">Envry.com</a>",
		"Gavii is a free image hosting website that lets users store and manage all of their favorite images into easy view and navigate albums. I developed the back-end for the desktop application that let's a user type a shortcut and select an area of their screens, and gavii automatically uploads it and opens a browser with the image. Making the process instant, effortless and easy.",
		"Kindle Shop is an e-commerce business that sells Kindle Fire devices at discount prices. It features a responsive design with highly aesthetic layout, as well as being fully AJAX enabled. It also features an Administrator Panel that provides control over inventory, prices, sales and clients. Visit it here: <a href=\"http://kindleshop.biz\" target=\"_blank\"><KindleShop class=\"b\"></KindleShop>iz</a>",
		"SurveyBucks is a pay-per-survey website that allows users to get paid for completing surveys. It features a responsive, mobile friendly, AJAX design. It makes use of the Bootstrap framework along with jQuery. Visit <a href='http://survey-bucks.com/'>here</a>",
		"I participated in the national hacking competition \"Toaster Wars\", in which I applied knowledge in penetration testing and hacking in general. I utilized techniques such MySQL, PHP, Pyton injection and stack overloading/overriding for vulnerable C programs. I also applied file forenciscs for recovery and decryption of files.",
		"VPASS is a secure, low cost, campus management system that provides security and increases communication between the administration and staff. This VPASS software runs on Windows, OSX, Android, and iOS. School administrators can communicate to their campus through our web panel by recording a voice message and formatting a HTML rich message to send out to specific classrooms, teachers, students, or sections of the school. I developed the back-end functionality using PHP and MySQL, and made the user interface completely AJAX enabled. I also impletemented the voice messaging system using flash and javascript.",
		"This project is a web-based text-editor using the ACE libraries. A user is able to log into any FTP server, and access the files remotely using this text editor. The files can then be saved with the press of a button and the changes will be live instantly."
	];


	echo "<textarea>";
	for ($i=0; $i < sizeof($imagesArray); $i++) { 
		$image = $imagesArray[$i];
		$title = htmlentities($descriptionArray[$i]);
		$thumbnail = $thumbnailArray[$i];
		echo "<div class=\"portfolio-item isotope-item filterclass\">";
		echo "<a class=\"image-popup-no-margins popup-image\" href=\"images/portfolio/$image\" title=\"$title\">";
		echo "<img class=\"img-responsive\" src=\"images/portfolio/$thumbnail\">";
		echo "</a>";
		echo "</div>";	

	}
	echo "</textarea>";
?>