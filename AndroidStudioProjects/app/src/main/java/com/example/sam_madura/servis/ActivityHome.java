package com.example.sam_madura.servis;

import android.content.Intent;
import android.os.CountDownTimer;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.CardView;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

public class ActivityHome extends AppCompatActivity implements View.OnClickListener{
private CardView pemesananCard, serfisCard, sparepartCard, infoCard;
    private static boolean userPressedBackAgain = false;

    public static ActivityHome activityHome;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
        activityHome = this;

        //inialisasi card
        pemesananCard = (CardView) findViewById(R.id.pemesanan_card);
        serfisCard = (CardView) findViewById(R.id.serfis_card);
        sparepartCard = (CardView) findViewById(R.id.sperpart_card);
        infoCard = (CardView) findViewById(R.id.info_card);

        //OnClickListener
        pemesananCard.setOnClickListener(this);
        serfisCard.setOnClickListener(this);
        sparepartCard.setOnClickListener(this);
        infoCard.setOnClickListener(this);

    }

    @Override
    public void onClick(View view) {
        //untuk proses activity
        Intent intent;
        switch (view.getId()){
            case R.id.pemesanan_card : intent = new Intent(this,Pemesanan.class);
            startActivity(intent);
            break;
            case R.id.serfis_card : intent = new Intent(this,Servis.class);
            startActivity(intent);
            break;
            case R.id.sperpart_card : intent = new Intent(this,Sperpart.class);
            startActivity(intent);
            break;
            case R.id.info_card : intent = new Intent(this,ActivityTabInfo.class);
            startActivity(intent);
            break;
            default:break;
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // untuk mengambil activity di menu, seperti profil
        getMenuInflater().inflate(R.menu.menu_activity_tab, menu);
        return true;
    }


    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        //untuk bisa ngclick dan menu clas yg dituju
        int id = item.getItemId();
        if (id== R.id.profil){
            Intent intent = new Intent(ActivityHome.this, Profil.class);
            startActivity(intent);
        }
        return super.onOptionsItemSelected(item);
    }

    @Override
    public void onBackPressed() {
        if (!userPressedBackAgain) {
            Toast.makeText(this, "Press back again to exit", Toast.LENGTH_SHORT).show();
            userPressedBackAgain = true;
        } else {
            super.onBackPressed();
        }

        new CountDownTimer(3000, 1000) {

            @Override
            public void onTick(long millisUntilFinished) {

            }

            @Override
            public void onFinish() {
                userPressedBackAgain = false;
            }
        }.start();

    }
}
