create table employee (empID varchar(255), empName varchar(255), designation varchar(255), empAddr varchar(255), emailID varchar(255), DOB date, primary key(empID));
insert into employee values('EMP001', 'Aakash Krishna', 'Manager', 'Ondipudur Coimbatore', 'aakash3697@gmail.com', TO_DATE('03-06-1997','DD-MM-YYYY'));
insert into employee values('EMP002', 'Sai Kaushik', 'Janitor', 'Streets', 'sabarirajan.saikaushik@gmail.com', TO_DATE('20-09-1997','DD-MM-YYYY'));
insert into employee values('EMP003', 'Sathya Swaruban', 'Cashier', 'S. Patty Coimbatore', 'sachi.sarvan@gmail.com', TO_DATE('24-04-1997','DD-MM-YYYY'));
insert into employee values('EMP004', 'Sourav Johar','Asst. Manager', 'Thillai Nagar Trichy', 'johar.sourav97@gmail.com', TO_DATE('10-11-1997','DD-MM-YYYY'));
insert into employee values('EMP005', 'Abinanth Chuckroo', 'Errand Boy', 'Ramanathapuram Coimbatore', 'abinanth97@gmail.com', TO_DATE('24-10-1997','DD-MM-YYYY'));
insert into employee values('EMP006', 'Mukund WN', 'Service', 'Nungambakkam Coimbatore', 'wudali@gmail.com', TO_DATE('24-07-1997','DD-MM-YYYY'));
insert into employee values('EMP007', 'Kabilan S', 'Service', 'Bessanager Chennai', 'saviprakash@gmail.com', TO_DATE('29-10-1997','DD-MM-YYYY'));
insert into employee values('EMP008', 'Kogul Karna', 'Service', 'Irugur Coimbatore', 'kogulkarna@gmail.com', TO_DATE('10-09-1997','DD-MM-YYYY'));
insert into employee values('EMP009', 'Shantam Bhuraria', 'Service', 'Gantok Nepal', 'shantam97@gmail.com', TO_DATE('10-02-1997','DD-MM-YYYY'));
insert into employee values('EMP010', 'Rajesh Naik', 'Service', 'Dubai Main Road Trichy', 'allstar@gmail.com', TO_DATE('11-08-1997','DD-MM-YYYY'));


create table ePhoneNo (empID varchar(255), phoneNo number, foreign key(empID) references employee(empID));
insert into ePhoneNo values('EMP001', 7708278142);
insert into ePhoneNo values('EMP001', 8667474186);
insert into ePhoneNo values('EMP002', 9500164232);
insert into ePhoneNo values('EMP003', 9944580867);
insert into ePhoneNo values('EMP004', 9786395805);
insert into ePhoneNo values('EMP005', 9940619537);
insert into ePhoneNo values('EMP006', 8667474186);
insert into ePhoneNo values('EMP007', 9500164232);
insert into ePhoneNo values('EMP008', 9944580867);
insert into ePhoneNo values('EMP009', 9786395805);
insert into ePhoneNo values('EMP010', 9940619537);

drop table employee;
drop table ephoneno;


create table customer (custID number, custName varchar(255), custAddr varchar(255), empID varchar(255), emailID varchar(255), primary key(custID), foreign key (empID) references employee(empID));
insert into customer values(10001, 'Petyr Baelish', 'Kings Landing', 'EMP006', 'sansaaa@gmail.com');
insert into customer values(10002, 'Mellisandre', 'Ashai', 'EMP007', 'mellisa@gmail.com');
insert into customer values(10003, 'Missandei', 'Naath', 'EMP008', 'greywormy@gmail.com');
insert into customer values(10004, 'Danaerys T.', 'Dragonstone', 'EMP009', 'danny@gmail.com');
insert into customer values(10005, 'Jon Snow', 'Winterfell', 'EMP010', 'egg@gmail.com');
insert into customer values(10006, 'Robb Stark', 'Winterfell', 'EMP006', 'robbydead@gmail.com');
insert into customer values(10007, 'Theon Greyjoy', 'Iron Islands', 'EMP007', 'iloveramsay@gmail.com');
insert into customer values(10008, 'Yara Greyjoy', 'Iron Islands', 'EMP008', 'biyara@gmail.com');
insert into customer values(10009, 'Jorah Mormont', 'Bear Island', 'EMP009', 'ih8jon@gmail.com');
insert into customer values(10010, 'Varys', 'Pentos', 'EMP010', 'eunuch@gmail.com');
insert into customer values(10011, 'Stannis Baratheon', 'Storms End', 'EMP006', 'stanny@gmail.com');
insert into customer values(10012, 'Margary Tyrell', 'Highgarden', 'EMP007', 'queenmarg@gmail.com');
insert into customer values(10013, 'Sansa Stark', 'Winterfell', 'EMP008', 'sassylady@gmail.com');
insert into customer values(10014, 'Brienne', 'Tarth', 'EMP009', 'blueisles@gmail.com');
insert into customer values(10015, 'Cersei Lannister', 'Casterly Rock', 'EMP010', 'incestwincest@gmail.com');

create table cphoneNo (custID number, phoneNo number, foreign key(custID) references customer(custID));
insert into cphoneNo values(10001, 6487529874);
insert into cphoneNo values(10001, 8123476322);
insert into cphoneNo values(10002, 1234752392);
insert into cphoneNo values(10003, 0989387239);
insert into cphoneNo values(10004, 0928439203);
insert into cphoneNo values(10005, 9894392403);
insert into cphoneNo values(10006, 2343234543);
insert into cphoneNo values(10007, 8786468454);
insert into cphoneNo values(10009, 7668765484);
insert into cphoneNo values(10009, 9785465465);
insert into cphoneNo values(10010, 8785468486);
insert into cphoneNo values(10011, 8765466554);
insert into cphoneNo values(10012, 9876546567);
insert into cphoneNo values(10013, 0928340938);
insert into cphoneNo values(10014, 0980938948);
insert into cphoneNo values(10015, 9875465455);
insert into cphoneNo values(10008, 9387488848);

drop table customer;


create table products (productID varchar(255), productName varchar(255), MRP number, amtLeft int, primary key(productID));
insert into products values('P001', 'Dark Fantasy', 30, 300);
insert into products values('P002', 'Mixie', 500, 20);
insert into products values('P003', 'Garnier Shampoo', 90, 50);
insert into products values('P004', 'Hervamatin Amazon', 50, 60);
insert into products values('P005', 'Parle G', 30, 100);
insert into products values('P006', 'Pears Soap', 50, 100);
insert into products values('P007', 'Good Day', 30, 100);
insert into products values('P008', 'Toothpaste', 50, 70);
insert into products values('P009', 'Pen', 10, 100);
insert into products values('P010', 'Notebook', 30, 100);

drop table products;

create table orders (orderID varchar(255), custID number, empID varchar(255), dateOfOrder date, primary key(orderId), foreign key(custID) references customer(custID), foreign key(empID) references employee(empID));
insert into orders values('ORD001', 10001, 'EMP006', to_date('11-08-2017','DD-MM-YYYY'));
insert into orders values('ORD002', 10002, 'EMP007', to_date('11-08-2017','DD-MM-YYYY'));
insert into orders values('ORD003', 10003, 'EMP008', to_date('12-08-2017','DD-MM-YYYY'));
insert into orders values('ORD004', 10004, 'EMP009', to_date('13-08-2017','DD-MM-YYYY'));
insert into orders values('ORD005', 10005, 'EMP010', to_date('13-08-2017','DD-MM-YYYY'));
insert into orders values('ORD006', 10006, 'EMP006', to_date('13-08-2017','DD-MM-YYYY'));
insert into orders values('ORD007', 10007, 'EMP007', to_date('14-08-2017','DD-MM-YYYY'));
insert into orders values('ORD008', 10008, 'EMP008', to_date('14-08-2017','DD-MM-YYYY'));
insert into orders values('ORD009', 10009, 'EMP009', to_date('15-08-2017','DD-MM-YYYY'));
insert into orders values('ORD010', 10010, 'EMP010', to_date('16-08-2017','DD-MM-YYYY'));
insert into orders values('ORD011', 10011, 'EMP006', to_date('17-08-2017','DD-MM-YYYY'));
insert into orders values('ORD012', 10012, 'EMP007', to_date('17-08-2017','DD-MM-YYYY'));
insert into orders values('ORD013', 10013, 'EMP008', to_date('18-08-2017','DD-MM-YYYY'));
insert into orders values('ORD014', 10014, 'EMP009', to_date('18-08-2017','DD-MM-YYYY'));
insert into orders values('ORD015', 10015, 'EMP010', to_date('18-08-2017','DD-MM-YYYY'));
drop table orders;

create table orderdetails (orderID varchar(255), productID varchar(255), quantity number, foreign key(orderID) references orders(orderID), foreign key(productID) references products(productID));
insert into orderdetails values('ORD001', 'P001', 3);
insert into orderdetails values('ORD001', 'P006', 1);
insert into orderdetails values('ORD002', 'P007', 3);
insert into orderdetails values('ORD003', 'P010', 10);
insert into orderdetails values('ORD004', 'P008', 2);
insert into orderdetails values('ORD004', 'P009', 3);
insert into orderdetails values('ORD005', 'P002', 1);
insert into orderdetails values('ORD006', 'P003', 1);
insert into orderdetails values('ORD007', 'P005', 3);
insert into orderdetails values('ORD007', 'P006', 1);
insert into orderdetails values('ORD008', 'P007', 5);
insert into orderdetails values('ORD008', 'P002', 1);
insert into orderdetails values('ORD009', 'P004',20);
insert into orderdetails values('ORD010', 'P010', 3);
insert into orderdetails values('ORD011', 'P003', 1);
insert into orderdetails values('ORD012', 'P007', 5);
insert into orderdetails values('ORD013', 'P010', 3);
insert into orderdetails values('ORD013', 'P002', 2);
insert into orderdetails values('ORD014', 'P004', 1);
insert into orderdetails values('ORD015', 'P005', 5);


