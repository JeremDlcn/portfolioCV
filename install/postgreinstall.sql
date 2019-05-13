--
-- PostgreSQL database dump
--

-- Dumped from database version 11.1
-- Dumped by pg_dump version 11.2

-- Started on 2019-05-11 16:38:17

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 8 (class 2615 OID 24639)
-- Name: admin; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA admin;


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 199 (class 1259 OID 24649)
-- Name: competences; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.competences (
    id_competences integer NOT NULL,
    title_competences character varying(15)
);



--
-- TOC entry 198 (class 1259 OID 24646)
-- Name: hobbies; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.hobbies (
    id_hobbies integer NOT NULL,
    title_hobbies character varying(25)
);



--
-- TOC entry 202 (class 1259 OID 24658)
-- Name: message; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.message (
    id_message integer NOT NULL,
    name_message character varying(30),
    mail_message character varying(40),
    text_message text
);



--
-- TOC entry 200 (class 1259 OID 24652)
-- Name: parcours; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.parcours (
    id_parcours integer NOT NULL,
    name_parcours character varying(50),
    annee_parcours date,
    nomtravail_parcours character varying(20),
    datedebuttravail_parcours date,
    datefintravail_parcours date
);



--
-- TOC entry 197 (class 1259 OID 24640)
-- Name: presentation; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.presentation (
    id_presentation integer NOT NULL,
    name_presentation character varying(30),
    text_presentation text,
    photochemin_presentation character varying(100)
);



--
-- TOC entry 201 (class 1259 OID 24655)
-- Name: realisations; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.realisations (
    id_realisations integer NOT NULL,
    name_realisations character varying(25),
    imagechemin_realisations character varying(100),
    lien_realisations character varying(100)
);




--
-- TOC entry 203 (class 1259 OID 24664)
-- Name: techno; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.techno (
    id_techno integer NOT NULL,
    title_techno character varying(20)
);


--
-- TOC entry 2833 (class 0 OID 24649)
-- Dependencies: 199
-- Data for Name: competences; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.competences (id_competences, title_competences) FROM stdin;
\.


--
-- TOC entry 2832 (class 0 OID 24646)
-- Dependencies: 198
-- Data for Name: hobbies; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.hobbies (id_hobbies, title_hobbies) FROM stdin;
\.


--
-- TOC entry 2836 (class 0 OID 24658)
-- Dependencies: 202
-- Data for Name: message; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.message (id_message, name_message, mail_message, text_message) FROM stdin;
\.


--
-- TOC entry 2834 (class 0 OID 24652)
-- Dependencies: 200
-- Data for Name: parcours; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.parcours (id_parcours, name_parcours, annee_parcours, nomtravail_parcours, datedebuttravail_parcours, datefintravail_parcours) FROM stdin;
\.


--
-- TOC entry 2831 (class 0 OID 24640)
-- Dependencies: 197
-- Data for Name: presentation; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.presentation (id_presentation, name_presentation, text_presentation, photochemin_presentation) FROM stdin;
\.


--
-- TOC entry 2835 (class 0 OID 24655)
-- Dependencies: 201
-- Data for Name: realisations; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.realisations (id_realisations, name_realisations, imagechemin_realisations, lien_realisations) FROM stdin;
\.


--
-- TOC entry 2837 (class 0 OID 24664)
-- Dependencies: 203
-- Data for Name: techno; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.techno (id_techno, title_techno) FROM stdin;
\.


-- Completed on 2019-05-11 16:38:17

--
-- PostgreSQL database dump complete
--

