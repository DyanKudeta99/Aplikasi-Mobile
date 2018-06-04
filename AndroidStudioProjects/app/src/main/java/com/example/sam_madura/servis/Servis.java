package com.example.sam_madura.servis;

import android.content.Intent;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;

import java.util.ArrayList;
import java.util.Collections;

public class Servis extends AppCompatActivity {

    ListView lst;
    String[] nama = {"Tune Up","Regular","paket"};
    Integer[] imgid={R.drawable.aqi,R.drawable.busi2,R.drawable.kampasrem};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_servis);

        lst= (ListView) findViewById(R.id.listItem);
        CustomListView customListView= new CustomListView(this, nama,imgid);
        lst.setAdapter(customListView);

        lst.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent,View view, int positon, long id) {
                if(positon==0){
                    Intent myintent= new Intent(view.getContext(), ActivityServiceTuneUp.class);
                    startActivityForResult(myintent,0);
                }else if(positon==1){
                    Intent myintent= new Intent(view.getContext(), ActivityServiceRegular.class);
                    startActivityForResult(myintent,0);
                }else if(positon==2){
                    Intent myintent= new Intent(view.getContext(), ActivityServicePaket.class);
                    startActivityForResult(myintent,0);
                }else{

                }


            }
        });

    }
}
