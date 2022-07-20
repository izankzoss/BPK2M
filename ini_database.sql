/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     18/07/2022 21:14:48                          */
/*==============================================================*/


drop table if exists ASSET;

drop table if exists CARA;

drop table if exists INSPEKSI;

drop table if exists JENIS;

drop table if exists JENIS_ASSET;

drop table if exists KEADAAN;

drop table if exists NO_REGISTRASI;

drop table if exists PEMUSNAHAN;

drop table if exists PENGADAAN;

drop table if exists PERBAIKAN;

drop table if exists SEBAB;

drop table if exists TEMPAT;

drop table if exists USERS;

/*==============================================================*/
/* Table: ASSET                                                 */
/*==============================================================*/
create table ASSET
(
   NO_ASSET             int not null,
   ID_PEMUSNAHAN        int not null,
   ID_ASSET             int not null,
   USERNAME             varchar(100) not null,
   ID_TEMPAT            int,
   NM_BARANG            char(100),
   SPESIFIKASI          char(100),
   JUMLAH               int,
   HARGA                int,
   TOTAL                int,
   TGL_TERIMA           date,
   primary key (NO_ASSET)
);

/*==============================================================*/
/* Table: CARA                                                  */
/*==============================================================*/
create table CARA
(
   ID_SEBAB2            int not null,
   ID_PEMUSNAHAN        int not null,
   CARA                 varchar(30),
   KET_CARA             varchar(30),
   primary key (ID_SEBAB2)
);

/*==============================================================*/
/* Table: INSPEKSI                                              */
/*==============================================================*/
create table INSPEKSI
(
   ID_INSPEKSI          int not null,
   ID_KEADAAN           int not null,
   NO_ASSET             int not null,
   TGL_INSPEKSI         varchar(20),
   PELAKSANA            varchar(100),
   primary key (ID_INSPEKSI)
);

/*==============================================================*/
/* Table: JENIS                                                 */
/*==============================================================*/
create table JENIS
(
   ID_JENIS             int not null,
   ID_PENGADAAN         varchar(8),
   JENIS_PENGADAAN      char(100),
   KET_JENIS            char(100),
   primary key (ID_JENIS)
);

/*==============================================================*/
/* Table: JENIS_ASSET                                           */
/*==============================================================*/
create table JENIS_ASSET
(
   ID_ASSET             int not null,
   JENIS_ASSET          varchar(30),
   KETERANGAN           longtext,
   primary key (ID_ASSET)
);

/*==============================================================*/
/* Table: KEADAAN                                               */
/*==============================================================*/
create table KEADAAN
(
   ID_KEADAAN           int not null,
   KEADAAN              varchar(30),
   KET_KEADAAN          varchar(30),
   primary key (ID_KEADAAN)
);

/*==============================================================*/
/* Table: NO_REGISTRASI                                         */
/*==============================================================*/
create table NO_REGISTRASI
(
   NO_ASSET             int not null,
   ID_PENGADAAN         varchar(8) not null,
   primary key (NO_ASSET, ID_PENGADAAN)
);

/*==============================================================*/
/* Table: PEMUSNAHAN                                            */
/*==============================================================*/
create table PEMUSNAHAN
(
   ID_PEMUSNAHAN        int not null,
   TGL_PEMUSNAHAN       date,
   primary key (ID_PEMUSNAHAN)
);

/*==============================================================*/
/* Table: PENGADAAN                                             */
/*==============================================================*/
create table PENGADAAN
(
   ID_PENGADAAN         varchar(8) not null,
   NMR_BRNG             int,
   TGL_PENGADAAN        char(100),
   JML_PENGADAAN        varchar(10),
   SUMBER_PENGADAAN     char(100),
   primary key (ID_PENGADAAN)
);

/*==============================================================*/
/* Table: PERBAIKAN                                             */
/*==============================================================*/
create table PERBAIKAN
(
   ID_PERBAIKAN         int not null,
   ID_INSPEKSI          int,
   PERBAIKAN            varchar(100),
   KET_PERBAIKAN        varchar(30),
   TGL_PERBAIKAN        date,
   BIAYA                int,
   primary key (ID_PERBAIKAN)
);

/*==============================================================*/
/* Table: SEBAB                                                 */
/*==============================================================*/
create table SEBAB
(
   ID_SEBAB             int not null,
   ID_PEMUSNAHAN        int not null,
   SEBAB                varchar(30),
   KET_SEBAB            varchar(30),
   primary key (ID_SEBAB)
);

/*==============================================================*/
/* Table: TEMPAT                                                */
/*==============================================================*/
create table TEMPAT
(
   ID_TEMPAT            int not null,
   TMP_SIMPAN           varchar(100),
   KET_TEMPAT           varchar(100),
   primary key (ID_TEMPAT)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS
(
   USERNAME             varchar(100) not null,
   PASSWORD             varchar(100),
   NM_LENGKAP           varchar(100),
   JABATAN              varchar(50),
   primary key (USERNAME)
);

alter table ASSET add constraint FK_CREATE_ASSET foreign key (USERNAME)
      references USERS (USERNAME) on delete restrict on update restrict;

alter table ASSET add constraint FK_JENIS_BARANG foreign key (ID_ASSET)
      references JENIS_ASSET (ID_ASSET) on delete restrict on update restrict;

alter table ASSET add constraint FK_PEMUSNAHAN foreign key (ID_PEMUSNAHAN)
      references PEMUSNAHAN (ID_PEMUSNAHAN) on delete restrict on update restrict;

alter table ASSET add constraint FK_TEMPAT foreign key (ID_TEMPAT)
      references TEMPAT (ID_TEMPAT) on delete restrict on update restrict;

alter table CARA add constraint FK_CARA foreign key (ID_PEMUSNAHAN)
      references PEMUSNAHAN (ID_PEMUSNAHAN) on delete restrict on update restrict;

alter table INSPEKSI add constraint FK_INSEPEKSI_BARANG foreign key (NO_ASSET)
      references ASSET (NO_ASSET) on delete restrict on update restrict;

alter table INSPEKSI add constraint FK_KEADAAN_BARANG foreign key (ID_KEADAAN)
      references KEADAAN (ID_KEADAAN) on delete restrict on update restrict;

alter table JENIS add constraint FK_JENIS_PENGADAAN foreign key (ID_PENGADAAN)
      references PENGADAAN (ID_PENGADAAN) on delete restrict on update restrict;

alter table NO_REGISTRASI add constraint FK_NO_REGISTRASI foreign key (NO_ASSET)
      references ASSET (NO_ASSET) on delete restrict on update restrict;

alter table NO_REGISTRASI add constraint FK_NO_REGISTRASI2 foreign key (ID_PENGADAAN)
      references PENGADAAN (ID_PENGADAAN) on delete restrict on update restrict;

alter table PERBAIKAN add constraint FK_PERBAIKAN foreign key (ID_INSPEKSI)
      references INSPEKSI (ID_INSPEKSI) on delete restrict on update restrict;

alter table SEBAB add constraint FK_SEBAB_PEMUSNAHAN foreign key (ID_PEMUSNAHAN)
      references PEMUSNAHAN (ID_PEMUSNAHAN) on delete restrict on update restrict;

