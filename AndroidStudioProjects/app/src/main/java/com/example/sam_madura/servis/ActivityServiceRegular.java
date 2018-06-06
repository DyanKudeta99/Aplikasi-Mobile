package com.example.sam_madura.servis;

import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MenuItem;
import android.widget.ListView;

public class ActivityServiceRegular extends AppCompatActivity {

    ListView lst;
    String[] nama = {"Ganti Busi","Ganti Kampas Rem Depan","Ganti Lampu","Ganti Lampu Sen","Ganti Oli Mesin"};
    Integer[] imgid={R.drawable.black1,R.drawable.black2,R.drawable.black3,R.drawable.black4,R.drawable.black5};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_service_regular);

        ActionBar actionBar = getSupportActionBar();
        actionBar.setTitle("SERVICE");
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        lst= (ListView) findViewById(R.id.listregular);
        Custom customListView= new Custom(this, nama,imgid);
        lst.setAdapter(customListView);

    }@Override
    public boolean onOptionsItemSelected(MenuItem item) {
        //tombolBack
        finish();
        return super.onOptionsItemSelected(item);
    }
}