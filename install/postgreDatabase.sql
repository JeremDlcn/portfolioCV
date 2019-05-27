--
-- PostgreSQL database dump
--

-- Dumped from database version 11.1
-- Dumped by pg_dump version 11.2

-- Started on 2019-05-27 22:09:05

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


ALTER SCHEMA admin OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 199 (class 1259 OID 24649)
-- Name: competences; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.competences (
    title_competences character varying(15),
    id_competences integer NOT NULL
);


ALTER TABLE admin.competences OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 24671)
-- Name: competences_id_competences_seq; Type: SEQUENCE; Schema: admin; Owner: postgres
--

CREATE SEQUENCE admin.competences_id_competences_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE admin.competences_id_competences_seq OWNER TO postgres;

--
-- TOC entry 2885 (class 0 OID 0)
-- Dependencies: 204
-- Name: competences_id_competences_seq; Type: SEQUENCE OWNED BY; Schema: admin; Owner: postgres
--

ALTER SEQUENCE admin.competences_id_competences_seq OWNED BY admin.competences.id_competences;


--
-- TOC entry 198 (class 1259 OID 24646)
-- Name: hobbies; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.hobbies (
    title_hobbies character varying(25),
    id integer NOT NULL
);


ALTER TABLE admin.hobbies OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 24731)
-- Name: hobbies_id_seq; Type: SEQUENCE; Schema: admin; Owner: postgres
--

CREATE SEQUENCE admin.hobbies_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE admin.hobbies_id_seq OWNER TO postgres;

--
-- TOC entry 2886 (class 0 OID 0)
-- Dependencies: 210
-- Name: hobbies_id_seq; Type: SEQUENCE OWNED BY; Schema: admin; Owner: postgres
--

ALTER SEQUENCE admin.hobbies_id_seq OWNED BY admin.hobbies.id;


--
-- TOC entry 202 (class 1259 OID 24658)
-- Name: message; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.message (
    name_message character varying(30),
    mail_message character varying(40),
    text_message text,
    id integer NOT NULL
);


ALTER TABLE admin.message OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 24719)
-- Name: message_id_seq; Type: SEQUENCE; Schema: admin; Owner: postgres
--

CREATE SEQUENCE admin.message_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE admin.message_id_seq OWNER TO postgres;

--
-- TOC entry 2887 (class 0 OID 0)
-- Dependencies: 209
-- Name: message_id_seq; Type: SEQUENCE OWNED BY; Schema: admin; Owner: postgres
--

ALTER SEQUENCE admin.message_id_seq OWNED BY admin.message.id;


--
-- TOC entry 200 (class 1259 OID 24652)
-- Name: parcours; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.parcours (
    name_parcours character varying(150),
    datedebut_parcours date,
    datefin_parcours date,
    id integer NOT NULL
);


ALTER TABLE admin.parcours OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 24710)
-- Name: parcours_id_seq; Type: SEQUENCE; Schema: admin; Owner: postgres
--

CREATE SEQUENCE admin.parcours_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE admin.parcours_id_seq OWNER TO postgres;

--
-- TOC entry 2888 (class 0 OID 0)
-- Dependencies: 208
-- Name: parcours_id_seq; Type: SEQUENCE OWNED BY; Schema: admin; Owner: postgres
--

ALTER SEQUENCE admin.parcours_id_seq OWNED BY admin.parcours.id;


--
-- TOC entry 197 (class 1259 OID 24640)
-- Name: presentation; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.presentation (
    name_presentation character varying(30),
    text_presentation text,
    photochemin_presentation character varying(100),
    id integer NOT NULL
);


ALTER TABLE admin.presentation OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 24698)
-- Name: presentation_id_seq; Type: SEQUENCE; Schema: admin; Owner: postgres
--

CREATE SEQUENCE admin.presentation_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE admin.presentation_id_seq OWNER TO postgres;

--
-- TOC entry 2889 (class 0 OID 0)
-- Dependencies: 207
-- Name: presentation_id_seq; Type: SEQUENCE OWNED BY; Schema: admin; Owner: postgres
--

ALTER SEQUENCE admin.presentation_id_seq OWNED BY admin.presentation.id;


--
-- TOC entry 201 (class 1259 OID 24655)
-- Name: realisations; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.realisations (
    name_realisations character varying(25),
    imagechemin_realisations character varying(100),
    lien_realisations character varying(100),
    id integer NOT NULL,
    id_techno integer
);


ALTER TABLE admin.realisations OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 24680)
-- Name: realisations_id_seq; Type: SEQUENCE; Schema: admin; Owner: postgres
--

CREATE SEQUENCE admin.realisations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE admin.realisations_id_seq OWNER TO postgres;

--
-- TOC entry 2890 (class 0 OID 0)
-- Dependencies: 205
-- Name: realisations_id_seq; Type: SEQUENCE OWNED BY; Schema: admin; Owner: postgres
--

ALTER SEQUENCE admin.realisations_id_seq OWNED BY admin.realisations.id;


--
-- TOC entry 203 (class 1259 OID 24664)
-- Name: techno; Type: TABLE; Schema: admin; Owner: postgres
--

CREATE TABLE admin.techno (
    title_techno character varying(20),
    id integer NOT NULL
);


ALTER TABLE admin.techno OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 24689)
-- Name: techno_id_seq; Type: SEQUENCE; Schema: admin; Owner: postgres
--

CREATE SEQUENCE admin.techno_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE admin.techno_id_seq OWNER TO postgres;

--
-- TOC entry 2891 (class 0 OID 0)
-- Dependencies: 206
-- Name: techno_id_seq; Type: SEQUENCE OWNED BY; Schema: admin; Owner: postgres
--

ALTER SEQUENCE admin.techno_id_seq OWNED BY admin.techno.id;


--
-- TOC entry 2726 (class 2604 OID 24673)
-- Name: competences id_competences; Type: DEFAULT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.competences ALTER COLUMN id_competences SET DEFAULT nextval('admin.competences_id_competences_seq'::regclass);


--
-- TOC entry 2725 (class 2604 OID 24733)
-- Name: hobbies id; Type: DEFAULT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.hobbies ALTER COLUMN id SET DEFAULT nextval('admin.hobbies_id_seq'::regclass);


--
-- TOC entry 2729 (class 2604 OID 24721)
-- Name: message id; Type: DEFAULT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.message ALTER COLUMN id SET DEFAULT nextval('admin.message_id_seq'::regclass);


--
-- TOC entry 2727 (class 2604 OID 24712)
-- Name: parcours id; Type: DEFAULT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.parcours ALTER COLUMN id SET DEFAULT nextval('admin.parcours_id_seq'::regclass);


--
-- TOC entry 2724 (class 2604 OID 24700)
-- Name: presentation id; Type: DEFAULT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.presentation ALTER COLUMN id SET DEFAULT nextval('admin.presentation_id_seq'::regclass);


--
-- TOC entry 2728 (class 2604 OID 24682)
-- Name: realisations id; Type: DEFAULT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.realisations ALTER COLUMN id SET DEFAULT nextval('admin.realisations_id_seq'::regclass);


--
-- TOC entry 2730 (class 2604 OID 24691)
-- Name: techno id; Type: DEFAULT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.techno ALTER COLUMN id SET DEFAULT nextval('admin.techno_id_seq'::regclass);


--
-- TOC entry 2868 (class 0 OID 24649)
-- Dependencies: 199
-- Data for Name: competences; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.competences (title_competences, id_competences) FROM stdin;
HTML	1
CSS	2
Javascript	3
Adobe XD	4
Langage C	5
Java	6
Office 365	7
FL Studio	8
\.


--
-- TOC entry 2867 (class 0 OID 24646)
-- Dependencies: 198
-- Data for Name: hobbies; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.hobbies (title_hobbies, id) FROM stdin;
Vélo	1
Design d'interface	2
Musique sur ordinateur	3
Course à pied	4
Guitare	5
\.


--
-- TOC entry 2871 (class 0 OID 24658)
-- Dependencies: 202
-- Data for Name: message; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.message (name_message, mail_message, text_message, id) FROM stdin;
Google	contact@gmail.com	Bonjour, nous avons vu votre portfolio et il nous intéresse	1
SpaceX	contact@spacex.com	Aidez nous à lancer nos fusées grâce à vos compétences	2
Amazon	contact@amazon.com	Votre profil nous intéresse, venez chez nous pour travail	3
Microsoft	contact@microsoft.fr	Bonjour, nous sommes intéressé par votre portfolio et par les projets que vous avez effectués	4
Cambou	cambou@gmail.com	OOOHH SUPER ETUDIANT, j'adore ton portfolio !	22
\.


--
-- TOC entry 2869 (class 0 OID 24652)
-- Dependencies: 200
-- Data for Name: parcours; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.parcours (name_parcours, datedebut_parcours, datefin_parcours, id) FROM stdin;
Lycée La Joliverie, Bac STI2D option Système d'information et numérique	2017-09-12	2018-06-21	1
Travail Saisonnier, Thales Group Cholet	2018-07-02	2018-07-01	2
Ingésup Ynov Campus, Bachelor en Informatique	2018-09-22	2023-06-21	3
Eleveur d'hirondelle dans le Morbihan	5223-02-23	2356-06-25	39
\.


--
-- TOC entry 2866 (class 0 OID 24640)
-- Dependencies: 197
-- Data for Name: presentation; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.presentation (name_presentation, text_presentation, photochemin_presentation, id) FROM stdin;
Delécrin Jérémie	Je suis étudiant en première année d'informatique à Ynov Campus. Je souhaite orienté mon parcours vers le développement logiciel, j'aime aussi créer des interfaces permettant de simplifier et améliorer la vie des utilisateurs, je m'intéresse à d'autres sujets comme le Design en Web	profil.png	1
\.


--
-- TOC entry 2870 (class 0 OID 24655)
-- Dependencies: 201
-- Data for Name: realisations; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.realisations (name_realisations, imagechemin_realisations, lien_realisations, id, id_techno) FROM stdin;
Voilier Handicap	voilier.png	https://voilierhandicap.000webhostapp.com/	1	2
PhoneView	choosephone.png	http://choosephone.000webhostapp.com/	2	3
Bloom	bloom.png	https://xd.adobe.com/view/0e55b92c-c74d-4315-5279-d2dbc6b8447e-7864/?hints=off	3	1
LPC School	lpc.png	#	4	1
Univership	univership.png	https://univership.000webhostapp.com/	5	2
Zelda	zelda.png	https://eager-engelbart-782989.netlify.com/main.html	6	3
\.


--
-- TOC entry 2872 (class 0 OID 24664)
-- Dependencies: 203
-- Data for Name: techno; Type: TABLE DATA; Schema: admin; Owner: postgres
--

COPY admin.techno (title_techno, id) FROM stdin;
HTML	1
CSS	2
Javascript	3
vent	16
\.


--
-- TOC entry 2892 (class 0 OID 0)
-- Dependencies: 204
-- Name: competences_id_competences_seq; Type: SEQUENCE SET; Schema: admin; Owner: postgres
--

SELECT pg_catalog.setval('admin.competences_id_competences_seq', 12, true);


--
-- TOC entry 2893 (class 0 OID 0)
-- Dependencies: 210
-- Name: hobbies_id_seq; Type: SEQUENCE SET; Schema: admin; Owner: postgres
--

SELECT pg_catalog.setval('admin.hobbies_id_seq', 10, true);


--
-- TOC entry 2894 (class 0 OID 0)
-- Dependencies: 209
-- Name: message_id_seq; Type: SEQUENCE SET; Schema: admin; Owner: postgres
--

SELECT pg_catalog.setval('admin.message_id_seq', 22, true);


--
-- TOC entry 2895 (class 0 OID 0)
-- Dependencies: 208
-- Name: parcours_id_seq; Type: SEQUENCE SET; Schema: admin; Owner: postgres
--

SELECT pg_catalog.setval('admin.parcours_id_seq', 41, true);


--
-- TOC entry 2896 (class 0 OID 0)
-- Dependencies: 207
-- Name: presentation_id_seq; Type: SEQUENCE SET; Schema: admin; Owner: postgres
--

SELECT pg_catalog.setval('admin.presentation_id_seq', 5, true);


--
-- TOC entry 2897 (class 0 OID 0)
-- Dependencies: 205
-- Name: realisations_id_seq; Type: SEQUENCE SET; Schema: admin; Owner: postgres
--

SELECT pg_catalog.setval('admin.realisations_id_seq', 20, true);


--
-- TOC entry 2898 (class 0 OID 0)
-- Dependencies: 206
-- Name: techno_id_seq; Type: SEQUENCE SET; Schema: admin; Owner: postgres
--

SELECT pg_catalog.setval('admin.techno_id_seq', 16, true);


--
-- TOC entry 2736 (class 2606 OID 24675)
-- Name: competences competences_pkey; Type: CONSTRAINT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.competences
    ADD CONSTRAINT competences_pkey PRIMARY KEY (id_competences);


--
-- TOC entry 2734 (class 2606 OID 24735)
-- Name: hobbies hobbies_pkey; Type: CONSTRAINT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.hobbies
    ADD CONSTRAINT hobbies_pkey PRIMARY KEY (id);


--
-- TOC entry 2742 (class 2606 OID 24723)
-- Name: message message_pkey; Type: CONSTRAINT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.message
    ADD CONSTRAINT message_pkey PRIMARY KEY (id);


--
-- TOC entry 2738 (class 2606 OID 24714)
-- Name: parcours parcours_pkey; Type: CONSTRAINT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.parcours
    ADD CONSTRAINT parcours_pkey PRIMARY KEY (id);


--
-- TOC entry 2732 (class 2606 OID 24702)
-- Name: presentation presentation_pkey; Type: CONSTRAINT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.presentation
    ADD CONSTRAINT presentation_pkey PRIMARY KEY (id);


--
-- TOC entry 2740 (class 2606 OID 24684)
-- Name: realisations realisations_pkey; Type: CONSTRAINT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.realisations
    ADD CONSTRAINT realisations_pkey PRIMARY KEY (id);


--
-- TOC entry 2744 (class 2606 OID 24693)
-- Name: techno techno_pkey; Type: CONSTRAINT; Schema: admin; Owner: postgres
--

ALTER TABLE ONLY admin.techno
    ADD CONSTRAINT techno_pkey PRIMARY KEY (id);


-- Completed on 2019-05-27 22:09:05

--
-- PostgreSQL database dump complete
--

