CREATE TABLE message (
    msg character varying(255)
);

ALTER TABLE message OWNER TO webuser;

INSERT INTO message VALUES ('Hello');
