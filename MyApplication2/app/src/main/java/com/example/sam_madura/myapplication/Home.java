package com.example.sam_madura.myapplication;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.CardView;
import android.view.View;

public class Home extends AppCompatActivity implements View.OnClickListener{
    private CardView chatRoomCard, sparepartCard, serviceCard, emergencyCard;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
        //definisi card
        chatRoomCard = (CardView) findViewById(R.id.chatRoom_card);
        sparepartCard = (CardView) findViewById(R.id.sparepart_card);
        serviceCard = (CardView) findViewById(R.id.service_card);
        emergencyCard = (CardView) findViewById(R.id.emergency_card);
        //onclick
        chatRoomCard.setOnClickListener(this);
        sparepartCard.setOnClickListener(this);
        serviceCard.setOnClickListener(this);
        emergencyCard.setOnClickListener(this);

    }

    @Override
    public void onClick(View view) {
        //proses pengclick
        Intent i;
        switch (view.getId()) {
            case R.id.chatRoom_card: i = new Intent(this, chatRoom.class); startActivity(i); break;
            case R.id.sparepart_card: i = new Intent(this, sparepart.class); startActivity(i); break;
            case R.id.service_card: i = new Intent(this, service.class); startActivity(i); break;
            case R.id.emergency_card: i = new Intent(this, emergency.class); startActivity(i); break;
            default: break;
        }
    }
}
