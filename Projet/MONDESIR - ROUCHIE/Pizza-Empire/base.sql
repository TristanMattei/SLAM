CREATE TABLE IF NOT EXISTS 'users' (
	'id' INT(10) unsigned NOT NULL,
  	'username' VARCHAR(255) NOT NULL,
  	'email' VARCHAR(255) NOT NULL,
  	'password' VARCHAR(255) NOT NULL,
  	'postal' VARCHAR(255) NOT NULL,
  	'birthday' DATE NOT NULL,
  	'phone' VARCHAR(255) NOT NULL,
  	'permission' VARCHAR(10) NOT NULL DEFAULT 'GUEST')
  	ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO 'users' ('id', 'username', 'email', 'password', 'postal', 'birthday', 'phone', 'permission') VALUES
(1, 'admin', 'pizza@empire', 'root', '23 rue des Abysses', '2018-12-23', '0612231999', 'ADMIN');

ALTER TABLE 'users'
ADD PRIMARY KEY ('id'), ADD UNIQUE KEY 'id' ('id');

ALTER TABLE 'users'
MODIFY 'id' INT(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
