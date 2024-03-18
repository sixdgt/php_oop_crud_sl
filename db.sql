CREATE TABLE item(
    item_id int not null primary key auto_increment,
    item_title varchar(255) not null,
    item_category varchar(100) not null,
    item_price double not null,
    item_quantity int not null,
    item_add_date datetime default current_timestamp
);