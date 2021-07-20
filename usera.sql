CREATE TABLE `usera` (
`firstname` varchar(200),
`lastname` varchar(200),
`telephone` varchar(200),
`afm` int not null,
`amka` int not null,
`address` varchar(200),
`id` int not null auto_increment,
`age` int not null,
`email` varchar(200),
`password` varchar(200),
 
 PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
