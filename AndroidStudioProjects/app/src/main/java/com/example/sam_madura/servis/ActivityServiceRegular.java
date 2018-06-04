package com.example.sam_madura.servis;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ListView;

public class ActivityServiceRegular extends AppCompatActivity {

    ListView lst;
    String[] nama = {"Pertama","Kedua","Ketiga"};
    Integer[] imgid={R.drawable.black1,R.drawable.black2,R.drawable.black3};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_service_regular);

        lst= (ListView) findViewById(R.id.listregular);
        Custom customListView= new Custom(this, nama,imgid);
        lst.setAdapter(customListView);

    }
}
