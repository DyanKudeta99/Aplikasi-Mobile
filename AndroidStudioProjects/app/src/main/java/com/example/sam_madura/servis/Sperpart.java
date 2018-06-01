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

        title = new String[]{"Aqi", "Busi", "GearHonda", "KampasRem", "Sparepart"};
        description = new String[]{"Aqi detail...", "Busi detail...", "GearHonda detail...", "KampasRem detail...", "Sparepart detail..."};
        icon = new int[]{R.drawable.aqi, R.drawable.busi2, R.drawable.gearhonda, R.drawable.kampasrem, R.drawable.sparepart1};

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
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == android.R.id.home) {
            Intent intent = new Intent(Sperpart.this, ActivityHome.class);
            startActivity(intent);
            this.finish();
        }
        return super.onOptionsItemSelected(item);
    }
}
