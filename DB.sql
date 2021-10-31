
CREATE TABLE tbl_user(
	id SERIAL PRIMARY KEY,
	name VARCHAR(40) NOT NULL,
	userid VARCHAR(10) NOT NULL,
	password TEXT NOT NULL
);

INSERT INTO tbl_user(
	id, name, userid, password)
	VALUES (0, 'Bill Gate', 'bill', '$2y$12$XCyt3e362GUs0GSz2pqGV.QtJYOQJWBBQWa1nVs/V.lpmvdNOuaHO');