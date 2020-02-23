CREATE TABLE course (
	id SERIAL PRIMARY KEY,
	code VARCHAR(25) NOT NULL UNIQUE,
	name VARCHAR(100) NOT NULL
	);

CREATE TABLE note
(
	id SERIAL PRIMARY KEY,
	course_id INT NOT NULL REFERENCES course(id),
	content text NOT NULL
);


INSERT INTO course(code, name) VALUES ('CS 313', 'Web Engineering II');
INSERT INTO course(code, name) VALUES ('CS 364', 'Software Enginnering I');
INSERT INTO course(code, name) VALUES ('CS 416', 'Software Enginnering II');
INSERT INTO course(code, name) VALUES ('CS 432', 'Software Enginnering III');
INSERT INTO course(code, name) VALUES ('CS 470', 'Computer Security');

INSERT INTO note(course_id, content) VALUES (1, 'Data Base stuff');
INSERT INTO note(course_id, content) VALUES (2, 'Gropu work');
INSERT INTO note(course_id, content) VALUES (3, 'Insane Quizes');
INSERT INTO note(course_id, content) VALUES (4, 'Long papers');
INSERT INTO note(course_id, content) VALUES (5, 'Tough labs');

SELECT * FROM note n JOIN course c ON n.course_id = c.id;
/*WHERE c.code = 'CS 313'; */
