package com.example.sam_madura.servis;

import android.content.Intent;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;

import java.util.ArrayList;
import java.util.Collections;

public class Servis extends AppCompatActivity {

    ListView lst;
    String[] nama = {"TUNE UP","REGULAR SERVICE","PAKET SERVICE"};
    Integer[] imgid={R.drawable.shopping_cart_black_24dp,R.drawable.bike_black_24dp,R.drawable.shop_black};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_servis);

        ActionBar actionBar = getSupportActionBar();
        actionBar.setTitle("SERVICE");
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

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
    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        //tombolBack
        finish();
        return super.onOptionsItemSelected(item);
    }
}
