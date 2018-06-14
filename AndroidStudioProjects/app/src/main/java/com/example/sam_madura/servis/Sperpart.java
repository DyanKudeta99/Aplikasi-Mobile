package com.example.sam_madura.servis;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.text.TextUtils;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.ListView;
import android.widget.SearchView;

import java.util.ArrayList;

public class Sperpart extends AppCompatActivity {
    ListView listView;
    ListViewAdapter adapter;
    String[] title;
    String[] description;
    int[] icon;
    ArrayList<Model> arrayList = new ArrayList<Model>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sperpart);

        ActionBar actionBar = getSupportActionBar();
        actionBar.setTitle("SPAREPART");

        title = new String[]{"ACCU", "BUSI", "GEAR SEPEDA", "KAMPAS REM", "BEARING", "RING", "KAMPAS","SPAREPART","OLI"};
        description = new String[]{"Rp. 100.000", "Rp.35.000", "Rp.150.000", "Rp.100.000", "Rp.150.000", "Rp.90.000","Rp.50.000", "Rp.200.000","Rp.60.000"};
        icon = new int[]{R.drawable.aqi, R.drawable.busi2, R.drawable.gearhonda, R.drawable.kampasrem,R.drawable.bearing, R.drawable.ring, R.drawable.kampas, R.drawable.sparepart1, R.drawable.oli};

        listView = findViewById(R.id.listView);

        for (int i = 0; i < title.length; i++) {
            Model model = new Model(title[i], description[i], icon[i]);
            //bind all strings in an array
            arrayList.add(model);
        }

        //pass results to listViewAdapter class
        adapter = new ListViewAdapter(this, arrayList);

        //bind the adapter to the listview
        listView.setAdapter(adapter);

        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        //tombolBack
        finish();
        return super.onOptionsItemSelected(item);
    }
}
