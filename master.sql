
	CREATE DATABASE `ageesh` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

	USE ageesh;

	create table users(userId INT UNIQUE NOT NULL AUTO_INCREMENT, 
	emailId VARCHAR(100) NOT NULL UNIQUE,  password VARCHAR(100) NOT NULL, name VARCHAR(250) NOT NULL, 
	active TINYINT(5) NOT NULL, PRIMARY KEY(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


	INSERT INTO `ageesh`.`users` (`userId`, `emailId`, `password`, `name`, `active`) VALUES (NULL, 'mavachan@gmail.com', MD5('123456'), 'mavachan', '1');


	create table routes(
	id BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	name varchar (255), 
	remarks  TEXT,
	PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

	create table company(code VARCHAR(10) NOT NULL UNIQUE, 
	name VARCHAR(250) NOT NULL , 
	address TEXT,
	startDate DATE DEFAULT '0000-00-00', 
	endDate DATE DEFAULT'0000-00-00',
	tin VARCHAR(25),
	companyTelephone VARCHAR(25),
	executiveName VARCHAR(50),
	executivePhone VARCHAR(50),
	status ENUM('active', 'inactive', 'suspended') NOT NULL DEFAULT 'active',
	statusDate DATE DEFAULT'0000-00-00',
	remarks TEXT,
	PRIMARY KEY(code))ENGINE=InnoDB DEFAULT CHARSET=utf8;

	create table products(code VARCHAR(10) NOT NULL UNIQUE,
	companyCode VARCHAR(10) ,
	description VARCHAR(250), 
	name VARCHAR(250) NOT NULL , 
	quantity INT,
	amount DECIMAL(7,3),
	retailAmount DECIMAL(7,3),
	distAmount DECIMAL(7,3),
	wholeAmount DECIMAL(7,3),
	retailerDate DATE DEFAULT '0000-00-00', 
	wholeDate DATE DEFAULT'0000-00-00',
	distDate DATE DEFAULT'0000-00-00',
	tax DECIMAL(7,3),
	entry DATE DEFAULT '0000-00-00',
	status ENUM('active', 'inactive', 'suspended')  NOT NULL DEFAULT 'active',
	PRIMARY KEY(code),
	FOREIGN KEY (companyCode)
		  REFERENCES company(code)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;

	create table customers(code VARCHAR(10) NOT NULL UNIQUE, 
	name VARCHAR(250) NOT NULL , 
	address TEXT,
	tin VARCHAR(25),
	telephone VARCHAR(25),
	cusType ENUM('D','R','W'),
	status ENUM('active', 'inactive', 'suspended')  NOT NULL DEFAULT 'active',
	pendingAmount DECIMAL(7,2),
	remarks TEXT,
	routeCode BIGINT,
	PRIMARY KEY(code),
	FOREIGN KEY (routeCode)
		  REFERENCES routes(id)
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;


	create table purchase(
	id BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	companyCode VARCHAR(10) NOT NULL,
	purchaseBillNumber VARCHAR(50),
	amount DECIMAL(7,3),
	discount DECIMAL(7,3),
	billDate DATE DEFAULT'0000-00-00',
	entryDate DATE DEFAULT'0000-00-00',
	remarks TEXT,
	PRIMARY KEY(id),
	FOREIGN KEY (companyCode)
		  REFERENCES company(code)
	)ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

	create table purchase_products
	id BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	purchaseId BIGINT NOT NULL,
	companyCode VARCHAR(10) NOT NULL,
	productCode VARCHAR(10) NOT NULL,
	productQuantity INT NOT NULL,
	amount DECIMAL(7,3),
	taxAmount DECIMAL(7,3),
	unitPrice DECIMAL(7,3),
	discount DECIMAL(7,3),
	remarks TEXT,
	PRIMARY KEY(id),
	FOREIGN KEY (purchaseId)
		  REFERENCES purchase(id),
	FOREIGN KEY (companyCode)
		  REFERENCES company(code),
	FOREIGN KEY (productCode)
		  REFERENCES products(code)	  
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;

	create table sale(
	billNo BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	customerCode VARCHAR(10) NOT NULL,
	billAmount DECIMAL(7,3),
	discount DECIMAL(7,3),
	amount DECIMAL(7,3),
	entryDate DATE DEFAULT'0000-00-00',
	remarks TEXT,
	PRIMARY KEY(billNo),
	FOREIGN KEY (customerCode)
		  REFERENCES customers(code)
	)ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

	create table sale_products(
	id BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	billNo BIGINT NOT NULL,
	companyCode VARCHAR(10) NOT NULL,
	productCode VARCHAR(10) NOT NULL,
	productQuantity INT NOT NULL,
	amount DECIMAL(7,3),
	taxAmount DECIMAL(7,3),
	unitPrice DECIMAL(7,3),
	remarks TEXT,
	PRIMARY KEY(id),
	FOREIGN KEY (billNo)
		  REFERENCES sale(billNo),
	FOREIGN KEY (companyCode)
		  REFERENCES company(code),
	FOREIGN KEY (productCode)
		  REFERENCES products(code)	  
	)ENGINE=InnoDB DEFAULT CHARSET=utf8;

	create table receipts(
	receiptsNo BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	customerCode VARCHAR(10) NOT NULL,
	amount DECIMAL(7,3),
	billNo BIGINT,
	paymentType ENUM('cheque','cash')  NOT NULL DEFAULT 'cash',
	billDate DATE DEFAULT'0000-00-00',
	entryDate DATE DEFAULT'0000-00-00',
	remarks TEXT,
	unitPrice DECIMAL(7,3),
	purchaseReturn TINYINT,
	PRIMARY KEY(receiptsNo),
	FOREIGN KEY (customerCode)
		  REFERENCES customers(code),
	FOREIGN KEY (billNo)
		  REFERENCES sale(billNo)	  
	)ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


	create table purchase_return(
	id BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	customerCode VARCHAR(10) NOT NULL,
	companyCode VARCHAR(10) NOT NULL,
	productCode VARCHAR(10) NOT NULL,
	quantity INT,
	returnType ENUM('items','money')  NOT NULL DEFAULT 'items',
	entryDate DATE DEFAULT' 0000-00-00',
	remarks TEXT,
	PRIMARY KEY(id),
	FOREIGN KEY (customerCode)
		  REFERENCES customers(code),
	FOREIGN KEY (companyCode)
		  REFERENCES company(code),
	FOREIGN KEY (productCode)
		  REFERENCES products(code)
	)ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;



	create table expenses(
	id BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	expenseType BIGINT NOT NULL,
	amount DECIMAL(7,3),
	remarks TEXT,
	entryDate DATE DEFAULT ' 0000-00-00',
	PRIMARY KEY(id),
	FOREIGN KEY (expenseType)
		  REFERENCES expense_types(id)
	)ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

	create table expense_types(
	id BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	name varchar (255), 
	entryDate DATE DEFAULT' 0000-00-00',
	PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


	create table userLogs(
	id BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	userName varchar (255), 
	entryDate DATETIME NOT NULL,
	remarks TEXT,
	PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

	create table notifications(
	id BIGINT UNIQUE NOT NULL AUTO_INCREMENT,
	userName varchar (255), 
	entryDate DATETIME NOT NULL,
	remarks TEXT,
	PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
