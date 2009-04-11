drop table members;
create table members(
  id serial primary key,
  firstname text not null,
  lastname text not null,
  password text not null
);
