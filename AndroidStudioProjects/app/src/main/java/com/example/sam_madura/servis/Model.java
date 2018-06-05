package com.example.sam_madura.servis;

public class Model {
    String title;
    String desc;
    int icon;
    String mahasiswa;
    Integer imgid;

    //constructor
    public Model(String title, String desc, int icon) {
        this.title = title;
        this.desc = desc;
        this.icon = icon;
    }

    public Model(String mahasiswa, Integer imgid) {
        this.mahasiswa= mahasiswa;
        this.imgid=imgid;
    }

    //getters


    public String getTitle() {
        return this.title;
    }

    public String getDesc() {
        return this.desc;
    }

    public int getIcon() {
        return this.icon;
    }
}
