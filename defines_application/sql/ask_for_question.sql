CREATE TABLE ask_for_question (
	id INT(32) PRIMARY KEY AUTO_INCREMENT,
	questionor VARCHAR(256),
	mail_address VARCHAR(256),
	question TEXT,
	question_timing DATETIME
);
