import React, { useState, useEffect } from "react";
import axios from "axios";
import Carousel from "react-grid-carousel";

const Card = () => {
    const [posts, setPosts] = useState([]);

    useEffect(() => {
        axios
            .get("http://localhost:5000/fetch")
            .then((res) => {
                // console.log(res);
                setPosts(res.data);
            })
            .catch((err) => {
                console.log(err);
            });
    }, []);

    return (
        <Carousel
            responsiveLayout={[
                {
                    breakpoint: 1200,
                    cols: 6,
                },
                {
                    breakpoint: 990,
                    cols: 5,
                },
            ]}
            mobileBreakpoint={670}
            rows={1}
            loop
            cols={8}
        >
            {posts.map((data) => (
                <Carousel.Item key={data.ID}>
                    <div className="h-[120px] w-[80px] flex flex-col p-2">
                        <img
                            className="w-[100px] h-[80px] object-cover"
                            src={data.Img}
                            alt="no img"
                        />
                        <p>{data.Detais}</p>
                    </div>
                </Carousel.Item>
            ))}
        </Carousel>
    );
};

export default Card;
