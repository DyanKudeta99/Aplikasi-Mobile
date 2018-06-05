package com.example.sam_madura.servis;


import android.app.Activity;
import android.content.Context;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;

public class CustomListView extends ArrayAdapter<String> {

    private String[] nama;
    private Integer[] imgid;
    private Activity contex;
    public CustomListView(Activity context,String[] nama, Integer[] imgid) {
        super(context, R.layout.activity_custom_list_view,nama);

        this.contex=context;
        this.nama=nama;
        this.imgid=imgid;
    }
    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent){
        View r=convertView;
        ViewHolder viewHolder=null;
        if(r==null){
            LayoutInflater layoutInflater=contex.getLayoutInflater();
            r=layoutInflater.inflate(R.layout.activity_custom_list_view,null, true);
            viewHolder= new ViewHolder(r);
            r.setTag(viewHolder);
        }else {
            viewHolder=(ViewHolder) r.getTag();
        }
        viewHolder.img.setImageResource(imgid[position]);
        viewHolder.txt1.setText(nama[position]);
        return r;


    }
    class ViewHolder{
        TextView txt1;
        ImageView img;
        ViewHolder(View  v){
            txt1=(TextView) v.findViewById(R.id.textview);
            img=(ImageView) v.findViewById(R.id.imgview);
        }
    }
}